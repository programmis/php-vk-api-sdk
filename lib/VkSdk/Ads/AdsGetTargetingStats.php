<?php

namespace VkSdk\Ads;

use VkSdk\Ads\Includes\AdsTargetingCriteria;
use VkSdk\Includes\Request;

class AdsGetTargetingStats extends Request
{

    private $account_id;
    private $ad_id;
    private $ad_format;
    private $ad_platform;
    private $link_url;
    private $link_domain;

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
        $this->link_domain = $link_domain;
        return $this;
    }

    public function setLinkUrl($link_url)
    {
        $this->link_url = $link_url;
        return $this;
    }

    public function setAdPlatform($ad_platform)
    {
        $this->ad_platform = $ad_platform;
        return $this;
    }

    public function setAdFormat($ad_format)
    {
        $this->ad_format = $ad_format;
        return $this;
    }

    public function setAdId($ad_id)
    {
        $this->ad_id = $ad_id;
        return $this;
    }

    public function setAccountId($account_id)
    {
        $this->account_id = $account_id;
        return $this;
    }

    public function setCriteria(AdsTargetingCriteria $criteria)
    {
        $this->criteria = $criteria;
        
        return $this->criteria;
    }

    public function doRequest()
    {
        if (!$this->account_id && !$this->link_url) {
            throw new \Exception("not fill account_id OR link_url");
        }
        $this->setMethod("Ads.getTargetingStats");

        $this->setParameter("criteria", $this->criteria->getJSON());
        $this->setParameter("account_id", $this->account_id);
        $this->setParameter("link_url", $this->link_url);

        if ($this->ad_id) {
            $this->setParameter("ad_id", $this->ad_id);
        }
        if ($this->ad_format) {
            $this->setParameter("ad_format", $this->ad_format);
        }
        if ($this->ad_platform) {
            $this->setParameter("ad_platform", $this->ad_platform);
        }
        if ($this->link_domain) {
            $this->setParameter("link_domain", $this->link_domain);
        }

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