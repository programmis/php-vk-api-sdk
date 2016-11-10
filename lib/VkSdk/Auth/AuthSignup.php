<?php

namespace VkSdk\Auth;

use VkSdk\Includes\Request;

/**
 * Registers a new user by phone number.
 * Class AuthSignup
 * @package VkSdk\Auth
 */
class AuthSignup extends Request
{

    /**
     * @var string
     */
    private $sid;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["first_name", "last_name", "client_id", "client_secret", "phone"]);

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
        return "auth.signup";
    }

    /**
     * Parameter to retry
     *
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Session ID required for method recall when SMS was not delivered.
     *
     * @return $this
     *
     * @param string $sid
     */
    public function setSid($sid)
    {
        $this->vkarg_sid = $sid;

        return $this;
    }

    /**
     * Your application ID.
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
     * User's first name.
     *
     * @return $this
     *
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->vkarg_first_name = $first_name;

        return $this;
    }

    /**
     * User's surname.
     *
     * @return $this
     *
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->vkarg_last_name = $last_name;

        return $this;
    }

    /**
     * User's password (minimum of 6 characters). Can be specified later with the  method.
     *
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
     * User's phone number. Can be pre-checked with the  method.
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

    /**
     * '1' — female; '2' — male
     *
     * @return $this
     *
     * @param integer $sex
     */
    public function setSex($sex)
    {
        $this->vkarg_sex = $sex;

        return $this;
    }

    /**
     * '1' — test mode, in which the user will not be registered and the phone number will not be checked for availability; '0' — default mode (default)
     *
     * @return $this
     *
     * @param boolean $test_mode
     */
    public function setTestMode($test_mode)
    {
        $this->vkarg_test_mode = $test_mode;

        return $this;
    }

    /**
     * '1' — call the phone number and leave a voice message of the authorization code; '0' — send the code by SMS (default)
     *
     * @return $this
     *
     * @param boolean $voice
     */
    public function setVoice($voice)
    {
        $this->vkarg_voice = $voice;

        return $this;
    }
}
