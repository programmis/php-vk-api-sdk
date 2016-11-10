<?php
namespace VkSdk\Account;

use VkSdk\Includes\Request;

/**
 * Change push settings.
 * Class AccountSetPushSettings
 *
 * @package VkSdk\Account
 */
class AccountSetPushSettings extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * New value for the key in a .
     *
     * @return $this
     *
     * @param string $value
     */
    public function addValue($value)
    {
        $this->vkarg_value[] = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["device_id"]);

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
        return "account.setPushSettings";
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
     * Notification key.
     *
     * @return $this
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->vkarg_key = $key;

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
     * New value for the key in a .
     *
     * @return $this
     *
     * @param array $value
     */
    public function setValue(array $value)
    {
        $this->vkarg_value = $value;

        return $this;
    }
}
