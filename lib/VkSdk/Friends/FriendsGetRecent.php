<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Returns a list of user IDs of the current user's recently added friends.
 * Class FriendsGetRecent
 * @package VkSdk\Friends
 */
class FriendsGetRecent extends Request
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
        return "friends.getRecent";
    }

    /**
     * Number of recently added friends to return.
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }
}
