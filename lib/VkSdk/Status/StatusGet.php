<?php

namespace VkSdk\Status;

use VkSdk\Includes\Request;

class StatusGet extends Request
{
    private $text;


    public function getText()
    {
        return $this->text;
    }

    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("status.get");

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (isset($json->response) && $json->response
            && isset($json->response->text)
        ) {
            $this->text = $json->response->text;
            return true;
        }

        return false;
    }
}
