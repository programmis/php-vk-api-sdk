<?php

namespace VkSdk\Status;

use VkSdk\Includes\Request;

class StatusSet extends Request
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

    public function doRequest()
    {
        $this->setMethod("status.set");
        
        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
        isset($json->response)
        ) {
            $this->response = $json->response;
            return true;
        }

        return false;
    }

}