<?php

namespace VkSdk\Status;

use VkSdk\Includes\Request;

class StatusSet extends Request
{

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

    public function doRequest()
    {
        $this->setMethod("status.set");
        
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

        if (
        isset($json->response)
        ) {
            $this->response = $json->response;
            return true;
        }

        return false;
    }

}