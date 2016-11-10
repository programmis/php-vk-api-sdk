<?php

namespace VkSdk\Account;

use VkSdk\Includes\Request;

/**
 * Unsubscribes a device from push notifications.
 *
 * Class AccountUnregisterDevice
 * @package VkSdk\Account
 */
class AccountUnregisterDevice extends Request
{
    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * result in $this->getResponse();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->response = $json->response;

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
        return "account.unregisterDevice";
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
}
