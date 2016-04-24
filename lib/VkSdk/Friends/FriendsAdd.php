<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

class FriendsAdd extends Request
{

    private $user_id;
    private $text;

    private $response;

    public function getResponse()
    {
        return $this->response;
    }

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("friends.add");

        $this->setParameter("user_id", $this->user_id);
        if ($this->text) {
            $this->setParameter("text", $this->text);
        }

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