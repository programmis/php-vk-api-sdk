<?php

namespace VkSdk\Auth;

use VkSdk\Includes\Request;

/**
 * Checks a user's phone number for correctness.
 * Class AuthCheckPhone
 * @package VkSdk\Auth
 */
class AuthCheckPhone extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["phone", "client_secret"]);

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
        return "auth.checkPhone";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return $this
     *
     * @param boolean $auth_by_phone
     */
    public function setAuthByPhone($auth_by_phone)
    {
        $this->vkarg_auth_by_phone = $auth_by_phone;

        return $this;
    }

    /**
     * User ID.
     *
     * @return $this
     *
     * @param integer $client_id
     */
    public function setClientId($client_id)
    {
        $this->vkarg_client_id = $client_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $client_secret
     */
    public function setClientSecret($client_secret)
    {
        $this->vkarg_client_secret = $client_secret;

        return $this;
    }

    /**
     * Phone number.
     *
     * @return $this
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->vkarg_phone = $phone;

        return $this;
    }
}
