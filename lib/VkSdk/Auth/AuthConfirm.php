<?php
namespace VkSdk\Auth;

use VkSdk\Includes\Request;

/**
 * Completes a user's registration (begun with the  method) using an authorization code.
 * Class AuthConfirm
 *
 * @package VkSdk\Auth
 */
class AuthConfirm extends Request
{

    /**
     * @var integer
     */
    public $success;

    /**
     * @var integer
     */
    public $user_id;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["client_id", "client_secret", "phone", "code"]);

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
        return "auth.confirm";
    }

    /**
     * 1 if success
     *
     * @return integer
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * User ID
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
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
     * @return $this
     *
     * @param string $code
     */
    public function setCode($code)
    {
        $this->vkarg_code = $code;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $intro
     */
    public function setIntro($intro)
    {
        $this->vkarg_intro = $intro;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->vkarg_password = $password;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->vkarg_phone = $phone;

        return $this;
    }

    /**
     * @return $this
     *
     * @param boolean $test_mode
     */
    public function setTestMode($test_mode)
    {
        $this->vkarg_test_mode = $test_mode;

        return $this;
    }
}
