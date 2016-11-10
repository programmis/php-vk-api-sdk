<?php

namespace VkSdk\Secure;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Secure\Includes\TokenChecked;

/**
 * Checks the user authentification in 'IFrame' and 'Flash' apps using the 'access_token' parameter.
 * Class SecureCheckToken
 * @package VkSdk\Secure
 */
class SecureCheckToken extends Request
{

    use AutoFillObject;

    /**
     * @var TokenChecked
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "secure.checkToken";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Secure\Includes\TokenChecked',
        ];
    }

    /**
     * user 'ip address'. Note that user may access using the 'ipv6' address, in this case it is required to transmit the 'ipv6' address. ; If not transmitted, the address will not be checked.
     *
     * @return $this
     *
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->vkarg_ip = $ip;

        return $this;
    }

    /**
     * client 'access_token'
     *
     * @return $this
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->vkarg_token = $token;

        return $this;
    }
}
