<?php

namespace VkSdk\Apps;

use VkSdk\Includes\Request;

/**
 * Sends a request to another user in an app that uses VK authorization.
 * Class AppsSendRequest
 * @package VkSdk\Apps
 */
class AppsSendRequest extends Request
{

    /**
     * 'invite' – if the request is sent to a user who does not have the app installed
     */
    const TYPE_INVITE = 'invite';

    /**
     * 'request' – if a user has already installed the app
     */
    const TYPE_REQUEST = 'request';

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["user_id"]);

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
        return "apps.sendRequest";
    }

    /**
     * special string key to be sent with the request
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
     * @return $this
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->vkarg_name = $name;

        return $this;
    }

    /**
     * @return $this
     *
     * @param boolean $separate
     */
    public function setSeparate($separate)
    {
        $this->vkarg_separate = $separate;

        return $this;
    }

    /**
     * request text
     *
     * @return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->vkarg_text = $text;

        return $this;
    }

    /**
     * request type. Values:; 'invite' – if the request is sent to a user who does not have the app installed;; 'request' – if a user has already installed the app
     * see self::TYPE_* constants
     *
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->vkarg_type = $type;

        return $this;
    }

    /**
     * id of the user to send a request
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
