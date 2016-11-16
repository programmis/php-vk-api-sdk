<?php

namespace VkSdk\Includes;

use AntiCaptcha\Includes\AntiCaptchaInterface;
use logger\Logger;
use Psr\Log\LoggerInterface;
use VkSdk\Base\Errors;

/**
 * Class Request
 *
 * @package VkSdk\Includes
 */
abstract class Request extends \ApiRator\Includes\Request implements VkInterface
{
    /** @var string $access_token */
    private static $access_token;
    /** @var AntiCaptchaInterface $antiCaptcha */
    private static $antiCaptcha = null;
    /** @var int $error_code */
    private $error_code;
    /** @var string $error_msg */
    private $error_msg;
    /** @var mixed $errors */
    private $errors;
    private $json_response;

    /**
     * Request constructor.
     *
     * @param string          $access_token
     * @param LoggerInterface $logger
     */
    public function __construct($access_token = null, $logger = null)
    {
        if (!$logger && !self::$logger) {
            $logger = new Logger();
        }
        if ($access_token) {
            $this->setAccessToken($access_token);
        }

        parent::__construct(self::MAGIC_PREFIX, $logger);
    }

    /**
     * @param string $access_token
     *
     * @return Request
     */
    public function setAccessToken($access_token)
    {
        self::$access_token = $access_token;
        $this->setParameter("access_token", $this->getAccessToken());

        return $this;
    }

    /** @inheritdoc */
    public function getAccessToken()
    {
        return self::$access_token;
    }

    /**
     * возвращает код ошибки
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * возвращает сообщение из ошибки
     *
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->error_msg;
    }

    /**
     * @return mixed
     */
    public function getJsonResponse()
    {
        return $this->json_response;
    }

    /**
     * @param AntiCaptchaInterface $antiCaptcha
     */
    public function setAntiCaptcha($antiCaptcha)
    {
        if (!($this->getAntiCaptcha() instanceof AntiCaptchaInterface)) {
            $error_text = get_class($this->getAntiCaptcha()) . ' must by implemented of AntiCaptchaInterface';
            if (self::$logger) {
                self::$logger->critical($error_text);
            }
            throw new \Exception($error_text);
        }

        self::$antiCaptcha = $antiCaptcha;

        return $this;
    }

    /**
     * @return AntiCaptchaInterface
     */
    public function getAntiCaptcha()
    {
        return self::$antiCaptcha;
    }

    /** @inheritdoc */
    public function answerProcessing($content)
    {
        $json = json_decode($content);

        if (!$json || !is_object($json)) {
            return false;
        }
        $this->json_response = $json;
        if (isset($json->error) && $json->error) {
            if (isset($json->error->error_code) && $json->error->error_code) {
                if ($json->error->error_code == Errors::API_ERROR_CAPTCHA) {
                    if ($this->getAntiCaptcha() && is_object($this->getAntiCaptcha())) {
                        if (!isset($json->error->captcha_sid) || !isset($json->error->captcha_img)) {
                            if (self::$logger) {
                                self::$logger->critical('incorrect captcha object');
                            }

                            return false;
                        }
                        if ($this->getAntiCaptcha()->recognize($json->error->captcha_img)) {
                            $this->setParameter("captcha_sid", $json->error->captcha_sid);
                            $this->setParameter("captcha_key", $this->getAntiCaptcha()->getText());

                            return $this->doRequest();
                        }
                    }
                }
                $this->error_code = $json->error->error_code;
            }
            if (isset($json->error->error_msg) && $json->error->error_msg) {
                $this->error_msg = $json->error->error_msg;
                if (self::$logger) {
                    self::$logger->error("#" . $this->error_code . " " . $this->error_msg);
                }
            } elseif (!is_array($json->error) && !is_object($json->error)) {
                $this->errors = $json;
                if (self::$logger) {
                    self::$logger->error($json->error);
                }
            }

            return false;
        }

        return true;
    }

    /**
     * В случае неудачи, ошибки можно посмотреть
     * вызвав методы getErrorCode и getErrorMsg
     *
     * @uses \VkSdk\Includes\Request::getErrorCode
     * @uses \VkSdk\Includes\Request::getErrorMsg
     * @return bool
     */
    abstract public function doRequest();

    /** @inheritdoc */
    public function handleParameters($parameters)
    {
        $r_params = [];
        foreach ($parameters as $key => $parameter) {
            if (is_array($parameter)) {
                $r_params[$key] = implode(',', $parameter);
            } else {
                $r_params[$key] = $parameter;
            }
        }

        return $r_params;
    }

    /** @inheritdoc */
    public function getResultApiUrl()
    {
        $url = self::API_URL . $this->getMethod();
        if ($this->getApiVersion()) {
            $url .= "?v=" . $this->getApiVersion();
        }

        return $url;
    }
}
