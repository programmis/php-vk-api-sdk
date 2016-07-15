<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 30.06.16
 * Time: 21:21
 */

namespace VkSdk\Ads;


use VkSdk\Includes\Request;

class AdsGetRejectionReason extends Request
{
    public function setAdId($ad_id)
    {
        $this->vkarg_ad_id = $ad_id;
        return $this;
    }

    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setRequiredParams(['account_id', 'ad_id']);

        $this->setMethod("ads.getRejectionReason");

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
            return true;
        }

        return false;
    }
}