<?php

namespace VkSdk\Account;

use VkSdk\Includes\Request;

class AccountSetOnline extends Request
{
    public function setVoip($voip)
    {
        $this->vkarg_voip = $voip;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("account.setOnline");


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
