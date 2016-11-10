<?php

namespace VkSdk\Account;

use VkSdk\Includes\Request;

/**
 * Mutes push notifications for the set period of time.
 * Class AccountSetSilenceMode
 * @package VkSdk\Account
 */
class AccountSetSilenceMode extends Request
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
        return "account.setSilenceMode";
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
     * Destination ID.; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'Chat ID', e.g. '2000000001'.; ; For community:; '- Community ID', e.g. '-12345'.; "
     *
     * @return $this
     *
     * @param integer $peer_id
     */
    public function setPeerId($peer_id)
    {
        $this->vkarg_peer_id = $peer_id;

        return $this;
    }

    /**
     * '1' — to enable sound in this dialog, '0' — to disable sound. Only if 'peer_id' contains user or community ID.
     *
     * @return $this
     *
     * @param integer $sound
     */
    public function setSound($sound)
    {
        $this->vkarg_sound = $sound;

        return $this;
    }

    /**
     * Time in seconds for what notifications should be disabled. '-1' to disable forever.
     *
     * @return $this
     *
     * @param integer $time
     */
    public function setTime($time)
    {
        $this->vkarg_time = $time;

        return $this;
    }
}
