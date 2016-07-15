<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

class FriendsAdd extends Request
{
    public function setText($text)
    {
        $this->vkarg_text = $text;
        return $this;
    }

    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setRequiredParams('user_id');

        $this->setMethod("friends.add");

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (isset($json->response) && $json->response) {
            return true;
        }

        return false;
    }

}