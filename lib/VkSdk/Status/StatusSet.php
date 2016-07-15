<?php

namespace VkSdk\Status;

use VkSdk\Includes\Request;

class StatusSet extends Request
{
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
            return true;
        }

        return false;
    }

}