<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 21.06.16
 * Time: 21:20
 */

namespace VkSdk\Ads;


use VkSdk\Includes\Request;

class AdsDeleteAds extends Request
{
    private $ids = [];

    public function addId($id)
    {
        $this->ids[] = $id;

        return $this;
    }

    public function setIds($ids)
    {
        $this->ids = $ids;

        return $this;
    }

    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setRequiredParams(['account_id']);

        $this->setMethod("ads.getAds");

        $this->setParameter("ids", json_encode($this->ids));

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