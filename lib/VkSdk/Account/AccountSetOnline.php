<?php

namespace VkSdk\Account;

use VkSdk\Includes\Request;

class AccountSetOnline extends Request
{

    private $voip;
    private $response;


    public function getResponse()
    {
        return $this->response;
    }

    public function setVoip($voip)
    {
        $this->voip = $voip;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("account.setOnline");

        if ($this->voip) {
            $this->setParameter("voip", $this->voip);
        }

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
            isset($json->response) && $json->response
        ) {
            $this->response = $json->response;
            return true;
        }

        return false;
    }

}