<?php

namespace VkSdk\Includes;

use Psr\Log\LoggerInterface;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Parser;
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
        if($loggerInterface){
            $this->logger = $loggerInterface;
        } else {
            $this->logger = new Logger();
        }
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

        if(!$this->access_token){
            try {
                $yaml = new Parser();
                $parse = $yaml->parse(
                    file_get_contents(
                        __DIR__ . "/../../../app/config/config.yml"
                    )
                );
                if(isset($parse['vkontakte']) && isset($parse['vkontakte']['access_token'])){
                    $this->access_token = $parse['vkontakte']['access_token'];
                }
                else{
                    throw new ParseException("not found access_token!");
                }
            }
            catch (ParseException $pe){
                $this->logger->critical("Unable to parse config: " . $pe->getMessage());
                throw new \Exception($pe->getMessage());
            }
        }

        $this->logger->debug("parameters: " . serialize($this->parameters));

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

    public function getParameters()
    {
        return $this->parameters;
    }

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function setParameter($name, $value)
    {
        $this->parameters[$name] = $value;
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