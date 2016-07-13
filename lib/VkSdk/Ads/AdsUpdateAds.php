<?php

namespace VkSdk\Ads;

use VkSdk\Ads\Includes\AdsAdSpecification;
use VkSdk\Ads\Includes\AdsTargetingCriteria;
use VkSdk\Ads\Includes\Specifications;
use VkSdk\Includes\Request;

class AdsUpdateAds extends Request
{

    private $ad_specification = [];
    private $ad_targeting = [];

    private $ids = [];
    
    private $response;

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }
    
    public function getIds()
    {
        return $this->ids;
    }

    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;
        return $this;
    }

    public function addAdSpecification()
    {
        return $this->ad_specification[] = new AdsAdSpecification(Specifications::UPDATE);
    }
    
    public function addAdTargetingCriteria()
    {
        return $this->ad_targeting[] = new AdsTargetingCriteria();
    }

    private function adDataToJSON()
    {
        $ad = [];

        if (count($this->ad_specification) > count($this->ad_targeting)) {
            foreach ($this->ad_specification as $key => $as) {
                $data = $as->getArray();
                if (isset($this->ad_targeting[$key])) {
                    if ($this->ad_targeting[$key]) {
                        $data = array_merge($data, $this->ad_targeting[$key]->getArray());
                    }
                }
                $ad[] = $data;
            }
        } else {
            foreach ($this->ad_targeting as $key => $at) {
                $data = $at->getArray();
                if (isset($this->ad_specification[$key])) {
                    if ($this->ad_specification[$key]) {
                        $data = array_merge($data, $this->ad_specification[$key]->getArray());
                    }
                }
                $ad[] = $data;
            }
        }

        return json_encode($ad);
    }

    public function doRequest()
    {
        $this->setRequiredParams('account_id');

        $this->setMethod("ads.updateAds");

        $this->setParameter("data", $this->adDataToJSON());

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
            isset($json->response) && ($this->response = $json->response) &&
            isset($json->response[0]) && $json->response[0] &&
            isset($json->response[0]->id) && $json->response[0]->id       
        ) {            
            foreach ($json->response as $rs) {
                $this->ids[] = $rs->id;
            }

            if(isset($json->response[0]->error_code)){
                return false;
            }
            
            return true;
        }

        return false;
    }

}