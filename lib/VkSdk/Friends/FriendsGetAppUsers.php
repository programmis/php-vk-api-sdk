<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Returns a list of IDs of the current user's friends who installed the application.
 * Class FriendsGetAppUsers
 * @package VkSdk\Friends
 */
class FriendsGetAppUsers extends Request
{

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
        return "friends.getAppUsers";
    }
}
