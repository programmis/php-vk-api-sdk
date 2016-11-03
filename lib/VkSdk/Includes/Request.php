<?php

namespace VkSdk\Includes;

use logger\Logger;
use Psr\Log\LoggerInterface;
use VkSdk\Config\Config;

abstract class Request extends \ApiRator\Includes\Request implements VkInterface
{
    private $error_code;
    private $error_msg;
    private $json_response;

    public function __construct(LoggerInterface $loggerInterface = null)
    {
        if (!$loggerInterface) {
            $loggerInterface = new Logger();
        }
        parent::__construct(self::MAGIC_PREFIX, $loggerInterface);
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
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

    public function answerProcessing($content)
    {
        $json = json_decode($content);

        if (isset($json->response)) {
            $this->json_response = $json->response;
        }
        if (isset($json->error) && $json->error) {
            if (isset($json->error->error_code) && $json->error->error_code) {
                if ($json->error->error_code == self::ERROR_CODE_CAPTCHA_NEEDED) {
                    /** TODO: connect php-antigate-api-sdk */
                    /*
                    if( $need_captcha_response ){
                        if(is_object($json) && isset($json->error->captcha_sid) && isset($json->error->captcha_img)) {
                            $recognize = new AntigateRecognizeCaptchaRequest( $json->error->captcha_img );
                            $recognize->downloadCaptcha();
                            $result = $recognize->doRecognize();
                            if( !$result ) {
                                $this->logger->debug("Don't recognize captcha!");
                                return false;
                            }
                            $this->setParameter( "captcha_sid", $json->error->captcha_sid );
                            $this->setParameter( "captcha_key", $recognize->getRecognizeCaptcha() );
                            $this->logger->debug("Send captcha_sid " . $json->error->captcha_sid);
                            $this->logger->debug("Send captcha_key " . $recognize->getRecognizeCaptcha());
                        }
                        else{
                            $this->logger->debug("Json is corrupt: " . serialize( $json ));
                            return false;
                        }
                    }
                    */
                }
                $this->error_code = $json->error->error_code;
            }
            if (isset($json->error->error_msg) && $json->error->error_msg) {
                $this->error_msg = $json->error->error_msg;
                $this->logger->error("#" . $this->error_code . " " . $this->error_msg);
            }

            return false;
        }

        return $json;
    }

    public function getResultApiUrl()
    {
        $access_token = $this->getAccessToken();
        if (!$access_token) {
            $access_token = Config::getParam('access_token', true);
        }
        $version = $this->getApiVersion();
        if (!$version) {
            $version = self::API_VERSION;
        }

        $url = self::API_URL . $this->getMethod() . "?v=" . $version . "&access_token=" . $access_token;

        return $url;
    }

    abstract public function doRequest();
}
