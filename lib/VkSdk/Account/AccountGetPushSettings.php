<?php
namespace VkSdk\Account;

use lib\AutoFillObject;
use VkSdk\Account\Includes\PushSettings;
use VkSdk\Includes\Request;

/**
 * Gets settings of push notifications.
 * Class AccountGetPushSettings
 *
 * @package VkSdk\Account
 */
class AccountGetPushSettings extends Request
{

    use AutoFillObject;

    /**
     * @var PushSettings
     */
    public $response;

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
        return "account.getPushSettings";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Account\Includes\PushSettings',
        ];
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
}
