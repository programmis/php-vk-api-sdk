<?php

namespace VkSdk\Account;

use VkSdk\Includes\Request;

/**
 * Subscribes an iOS/Android/Windows Phone-based device to receive push notifications
 * Class AccountRegisterDevice
 * @package VkSdk\Account
 */
class AccountRegisterDevice extends Request
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
        $this->setRequiredParams(["token", "device_id"]);

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
        return "account.registerDevice";
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
     * Unique device ID.
     *
     * @return $this
     *
     * @param string $device_id
     */
    public function setDeviceId($device_id)
    {
        $this->vkarg_device_id = $device_id;

        return $this;
    }

    /**
     * String name of device model.
     *
     * @return $this
     *
     * @param string $device_model
     */
    public function setDeviceModel($device_model)
    {
        $this->vkarg_device_model = $device_model;

        return $this;
    }

    /**
     * Device year.
     *
     * @return $this
     *
     * @param integer $device_year
     */
    public function setDeviceYear($device_year)
    {
        $this->vkarg_device_year = $device_year;

        return $this;
    }

    /**
     * Push settings in a .
     *
     * @return $this
     *
     * @param string $settings
     */
    public function setSettings($settings)
    {
        $this->vkarg_settings = $settings;

        return $this;
    }

    /**
     * String version of device operating system.
     *
     * @return $this
     *
     * @param string $system_version
     */
    public function setSystemVersion($system_version)
    {
        $this->vkarg_system_version = $system_version;

        return $this;
    }

    /**
     * Device token used to send notifications. (for mpns, the token shall be URL for sending of notifications)
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
