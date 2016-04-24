<?php

namespace VkSdk\Ads;

use VkSdk\Includes\Request;

class AdsGetAccounts extends Request
{

    private $account_id;
    private $account_type;
    private $account_status;
    private $access_role;

    public function getAccessRole()
    {
        return $this->access_role;
    }

    public function getAccountStatus()
    {
        return $this->account_status;
    }

    public function getAccountType()
    {
        return $this->account_type;
    }

    public function getAccountId()
    {
        return $this->account_id;
    }

    public function doRequest()
    {
        $this->setMethod("Ads.getAccounts");

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
            isset($json->response) && isset($json->response[0]) &&
            isset($json->response[0]->account_id) &&
            isset($json->response[0]->account_type) &&
            isset($json->response[0]->account_status) &&
            isset($json->response[0]->access_role)
        ) {
            $this->account_id = $json->response[0]->account_id;
            $this->account_type = $json->response[0]->account_type;
            $this->account_status = $json->response[0]->account_status;
            $this->access_role = $json->response[0]->access_role;

            return true;
        }

        return false;
    }

}