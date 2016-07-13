<?php

namespace VkSdk\Ads;

use VkSdk\Ads\Includes\AdsAdSpecification;
use VkSdk\Ads\Includes\AdsTargetingCriteria;
use VkSdk\Ads\Includes\Specifications;
use VkSdk\Includes\Request;

class AdsCreateAds extends Request
{

    private $ad_specification = [];
    private $ad_targeting = [];

    private $ids = [];

    public function getIds()
    {
        return $this->ids;
    }

    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;
        return $this;
    }

    public function addAdSpecification(AdsAdSpecification $adsAdSpecification = null)
    {
        if (!$adsAdSpecification) {
            return $this->ad_specification[] = new AdsAdSpecification(Specifications::CREATE);
        } else {
            return $this->ad_specification[] = $adsAdSpecification;
        }
    }

    public function addAdTargetingCriteria(AdsTargetingCriteria $adsTargetingCriteria = null)
    {
        if (!$adsTargetingCriteria) {
            return $this->ad_targeting[] = new AdsTargetingCriteria();
        } else {
            return $this->ad_targeting[] = $adsTargetingCriteria;
        }
    }

    private function adDataToJSON()
    {
        $ad = [];

        foreach ($this->ad_specification as $as) {
            $ad[] = $as->getArray();
        }
        foreach ($this->ad_targeting as $at) {
            $ad[] = $at->getArray();
        }

        return json_encode($ad);
    }

    public function doRequest()
    {
        $this->setRequiredParams('account_id');

        $this->setMethod("ads.createAds");

        $this->setParameter("data", $this->adDataToJSON());

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
            isset($json->response) && $json->response &&
            isset($json->response[0]) && $json->response[0] &&
            isset($json->response[0]->id) && $json->response[0]->id
        ) {
            foreach ($json->response as $rs) {
                $this->ids[] = $rs->id;
            }

            return true;
        }

        return false;
    }

}