<?php

namespace VkSdk\Ads;

use VkSdk\Ads\Includes\AdsAdSpecification;
use VkSdk\Ads\Includes\Specifications;
use VkSdk\Includes\Request;

class AdsGetAds extends Request
{

    private $account_id;
    private $client_id;
    private $include_deleted;
    private $campaign_ids = array();
    private $ad_ids = array();
    private $limit;
    private $offset;

    private $ad_specifications = array();


    public function getAdSpecifications()
    {
        return $this->ad_specifications;
    }

    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }

    public function setIncludeDeleted($include_deleted)
    {
        $this->include_deleted = $include_deleted;
        return $this;
    }

    public function addCampaignId($campaign_id)
    {
        $this->campaign_ids[] = $campaign_id;
        return $this;
    }

    public function addAdId($ad_id)
    {
        $this->ad_ids[] = $ad_id;
        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }


    public function setAccountId($account_id)
    {
        $this->account_id = $account_id;
        return $this;
    }

    public function doRequest()
    {
        if (!$this->account_id) {
            throw new \Exception("not fill account_id");
        }
        $this->setMethod("Ads.getAds");

        $this->setParameter("account_id", $this->account_id);
        if ($this->include_deleted) {
            $this->setParameter("include_deleted", $this->include_deleted);
        }
        if ($this->limit) {
            $this->setParameter("limit", $this->limit);
        }
        if ($this->offset) {
            $this->setParameter("offset", $this->offset);
        }
        if ($this->client_id) {
            $this->setParameter("client_id", $this->client_id);
        }
        if (count($this->ad_ids)) {
            $this->setParameter("ad_ids", json_encode($this->ad_ids));
        }
        if (count($this->campaign_ids)) {
            $this->setParameter("campaign_ids", json_encode($this->campaign_ids));
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

            foreach ($json->response as $key => $rs) {
                $this->ad_specifications[$key] = new AdsAdSpecification($this, Specifications::GET);
                if (isset($rs->ad_platform)) {
                    $this->ad_specifications[$key]->setAdPlatform($rs->ad_platform);
                }
                if (isset($rs->cpc)) {
                    $this->ad_specifications[$key]->setCpc($rs->cpc);
                }
                if (isset($rs->cpm)) {
                    $this->ad_specifications[$key]->setCpc($rs->cpm);
                }
                if (isset($rs->video)) {
                    $this->ad_specifications[$key]->setCpc($rs->video);
                }
                if (isset($rs->disclaimer)) {
                    $this->ad_specifications[$key]->setCpc($rs->disclaimer);
                }
                if (isset($rs->impressions_limit)) {
                    $this->ad_specifications[$key]->setCpc($rs->impressions_limit);
                }
                if (isset($rs->ad_format)) {
                    $this->ad_specifications[$key]->setAdFormat($rs->ad_format);
                }
                if (isset($rs->cost_type)) {
                    $this->ad_specifications[$key]->setCostType($rs->cost_type);
                }
                if (isset($rs->category2_id)) {
                    $this->ad_specifications[$key]->setCategory2Id($rs->category2_id);
                }
                if (isset($rs->category1_id)) {
                    $this->ad_specifications[$key]->setCategory1Id($rs->category1_id);
                }
                if (isset($rs->update_time)) {
                    $this->ad_specifications[$key]->setUpdateTime($rs->update_time);
                }
                if (isset($rs->create_time)) {
                    $this->ad_specifications[$key]->setCreateTime($rs->create_time);
                }
                if (isset($rs->all_limit)) {
                    $this->ad_specifications[$key]->setAllLimit($rs->all_limit);
                }
                if (isset($rs->approved)) {
                    $this->ad_specifications[$key]->setApproved($rs->approved);
                }
                if (isset($rs->status)) {
                    $this->ad_specifications[$key]->setStatus($rs->status);
                }
                if (isset($rs->name)) {
                    $this->ad_specifications[$key]->setName($rs->name);
                }
                if (isset($rs->campaign_id)) {
                    $this->ad_specifications[$key]->setCampaignId($rs->campaign_id);
                }
                if (isset($rs->id)) {
                    $this->ad_specifications[$key]->setAdId($rs->id);
                }
            }

            return true;
        }

        return false;
    }

}