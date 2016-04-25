<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

class FriendsAdd extends Request
{
    
    private $response;

    public function getResponse()
    {
        return $this->response;
    }

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
            $this->response = $json->response;
            return true;
        }

        return false;
    }

}