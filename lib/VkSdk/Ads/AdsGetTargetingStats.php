<?php

namespace VkSdk\Ads;

use VkSdk\Ads\Includes\AdsTargetingCriteria;
use VkSdk\Includes\Request;

class AdsGetTargetingStats extends Request
{

    private $audience_count;
    private $recommended_cpc;
    private $recommended_cpm;

    /**
     * @var  AdsTargetingCriteria
     */
    private $criteria;

    public function getRecommendedCPM()
    {
        return $this->recommended_cpm;
    }

    public function getRecommendedCPC()
    {
        return $this->recommended_cpc;
    }

    public function getAudienceCount()
    {
        return $this->audience_count;
    }

    public function setLinkDomain($link_domain)
    {
        $this->vkarg_link_domain = $link_domain;
        return $this;
    }

    public function setLinkUrl($link_url)
    {
        $this->vkarg_link_url = $link_url;
        return $this;
    }

    public function setAdPlatform($ad_platform)
    {
        $this->vkarg_ad_platform = $ad_platform;
        return $this;
    }

    public function setAdFormat($ad_format)
    {
        $this->vkarg_ad_format = $ad_format;
        return $this;
    }

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

    public function setCriteria(AdsTargetingCriteria $criteria)
    {
        $this->criteria = $criteria;
        
        return $this->criteria;
    }

    public function doRequest()
    {
        $this->setRequiredParams(array('account_id', 'link_url'));
        
        $this->setMethod("Ads.getTargetingStats");

        $this->setParameter("criteria", $this->criteria->getJSON());

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
            isset($json->response) && $json->response &&
            isset($json->response->audience_count) &&
            isset($json->response->recommended_cpc) &&
            isset($json->response->recommended_cpm)
        ) {
            $this->audience_count = $json->response->audience_count;
            $this->recommended_cpc = $json->response->recommended_cpc;
            $this->recommended_cpm = $json->response->recommended_cpm;
            return true;
        }

        return false;
    }

}