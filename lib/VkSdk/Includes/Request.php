<?php

namespace VkSdk\Includes;

use logger\Logger;
use Psr\Log\LoggerInterface;

/**
 * Class Request
 * @package VkSdk\Includes
 */
abstract class Request extends \ApiRator\Includes\Request implements VkInterface
{
    /** @var int $error_code */
    private $error_code;
    /** @var string $error_msg */
    private $error_msg;
    private $json_response;
    /** @var string $access_token */
    private static $access_token;

    /**
     * Request constructor.
     * @param string $access_token
     * @param LoggerInterface $logger
     */
    public function __construct($access_token = null, $logger = null)
    {
        if (!$logger) {
            $logger = new Logger();
        }
        if ($access_token) {
            $this->setAccessToken($access_token);
        }

        parent::__construct(self::MAGIC_PREFIX, $logger);
    }

    /** @inheritdoc */
    public function getAccessToken()
    {
        return self::$access_token;
    }

    /**
     * @param string $access_token
     *
     * @return Request
     */
    public function setAccessToken($access_token)
    {
        self::$access_token = $access_token;

        return $this;
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

    /** @inheritdoc */
    public function answerProcessing($content)
    {
        $json = json_decode($content);

        if (isset($json->response)) {
            $this->json_response = $json;
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

        return true;
    }

    /**
     * @param int $cnt
     *
     * @return string
     */
    private function getUrlSymbol(&$cnt)
    {
        $symbol = '&';
        if ($cnt == 0) {
            $symbol = '?';
        }
        $cnt++;

        return $symbol;
    }

    /** @inheritdoc */
    public function getResultApiUrl()
    {
        $cnt = 0;

        $url = self::API_URL . $this->getMethod();
        if ($this->getApiVersion()) {
            $url .= $this->getUrlSymbol($cnt) . "v=" . $this->getApiVersion();
        }
        if ($this->getAccessToken()) {
            $url .= $this->getUrlSymbol($cnt) . "access_token=" . $this->getAccessToken();
        }

        return $url;
    }

    /**
     * В случае неудачи, ошибки можно посмотреть
     * вызвав методы getErrorCode и getErrorMsg
     *
     * @uses \VkSdk\Includes\Request::getErrorCode
     * @uses \VkSdk\Includes\Request::getErrorMsg
     *
     * @return bool
     */
    abstract public function doRequest();
}
