<?php

namespace VkSdk\Includes;

use Psr\Log\LoggerInterface;
use VkSdk\Logger\Logger;

class Opts
{

    private $access_token;
    private $parameters = array();
    private $method;
    protected $logger;
    private $v;

    const VK_API_VERSION = '5.29';
    const API_URL = "https://api.vk.com/method/";


    public function __construct(LoggerInterface $loggerInterface = null)
    {
        if ($loggerInterface) {
            $this->logger = $loggerInterface;
        } else {
            $this->logger = new Logger();
        }
    }

    public function __set($name, $value)
    {
        if (preg_match('|vkarg_(.*)|', $name, $res)) {
            if (isset($res[1]) && $res[1]) {
                $this->setParameter($res[1], $value);
            }
        } else {
            $this->logger->warning('Set unknown variable: ' . $name);
        }
    }

    public function __get($name)
    {
        if (preg_match('|vkarg_(.*)|', $name, $res)) {
            if (isset($res[1]) && $res[1] && array_key_exists($res[1], $this->data)) {
                return $this->data[$res[1]]['value'];
            }
        } else {
            $this->logger->warning('Get unknown variable: ' . $name);
        }
        return null;
    }

    public function getResultApiUrl()
    {
        if (!$this->v) {
            if (defined("VK_API_VERSION")) {
                $this->v = VK_API_VERSION;
            } else {
                $this->v = self::VK_API_VERSION;
            }
        }
        if (!$this->method) {
            throw new \Exception("method not fill");
        }

        if (!$this->access_token) {
            $this->access_token = Logger::getConfigParam('access_token', true);
        }

        $url = self::API_URL . $this->method . "?v=" . $this->v . "&access_token=" . $this->access_token;

        return $url;
    }

    public function setApiVersion($v)
    {
        return $this->setV($v);
    }

    public function setV($v)
    {
        $this->v = $v;
        return $this;
    }

    public function setRequiredParams($params)
    {
        if (is_array($params)) {
            foreach ($params as $param) {
                $this->parameters[$param]['required'] = true;
            }
        } else {
            $this->parameters[$params]['required'] = true;
        }
    }

    public function checkRequiredParams()
    {
        foreach ($this->parameters as $key => $param) {
            if (is_array($param)) {
                if (isset($param['required']) && $param['required'] && !isset($param['value'])) {
                    $error = "not fill '" . $key . "' required parameter!";
                    $this->logger->critical($error);
                    throw new \Exception($error);
                }
            } else {
                $this->logger->warning("Wrong parameter: '" . $key . "', value: " . $param);
                unset($this->parameters[$key]);
            }
        }
    }

    public function getParameters()
    {
        $parameters = array();
        foreach ($this->parameters as $key => $param) {
            $parameters[$key] = $param['value'];
        }
        return $parameters;
    }

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function setParameter($name, $value)
    {
        if (is_array($value)) {
            if (isset($value['value'])) {
                $this->parameters[$name]['value'] = $value['value'];
            } else {
                $this->logger->warning('Can\'t set parameter: ' . $name . ', values: ' . serialize($value));
            }
            if (isset($value['required'])) {
                $this->parameters[$name]['required'] = $value['required'];
            }
        } else {
            $this->parameters[$name]['value'] = $value;
        }
        return $this;
    }

    public function setParameters($param)
    {
        $this->parameters = $param;
        return $this;
    }

    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
        return $this;
    }

}