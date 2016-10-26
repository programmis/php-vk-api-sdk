<?php

namespace VkSdk\Ads;

use VkSdk\Ads\Includes\AdsAdSpecification;
use VkSdk\Ads\Includes\Specifications;
use VkSdk\Includes\Request;

class AdsGetAds extends Request
{
    private $campaign_ids = [];
    private $ad_ids = [];

    /**
     * @var AdsAdSpecification[]
     */
    private $ad_specifications = [];

    public function getAdSpecifications()
    {
        return $this->ad_specifications;
    }

    public function setClientId($client_id)
    {
        $this->vkarg_client_id = $client_id;
        return $this;
    }

    public function setIncludeDeleted($include_deleted)
    {
        $this->vkarg_include_deleted = $include_deleted;
        return $this;
    }

    public function setCampaignIds($campaign_ids)
    {
        $this->campaign_ids = $campaign_ids;
        return $this;
    }

    public function addCampaignId($campaign_id)
    {
        $this->campaign_ids[] = $campaign_id;
        return $this;
    }

    public function setAdIds($ad_ids)
    {
        $this->ad_ids = $ad_ids;
        return $this;
    }

    public function addAdId($ad_id)
    {
        $this->ad_ids[] = $ad_id;
        return $this;
    }

    public function setLimit($limit)
    {
        $this->vkarg_limit = $limit;
        return $this;
    }

    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;
        return $this;
    }

    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setRequiredParams('account_id');

        $this->setMethod("ads.getAds");

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

        if (isset($json->response) && $json->response) {
            foreach ($json->response as $key => $rs) {
                $this->ad_specifications[$key] = new AdsAdSpecification(Specifications::GET);
                if (isset($rs->ad_platform)) {
                    $this->ad_specifications[$key]->setAdPlatform($rs->ad_platform);
                }
                if (isset($rs->cpc)) {
                    $this->ad_specifications[$key]->setCpc($rs->cpc);
                }
                if (isset($rs->cpm)) {
                    $this->ad_specifications[$key]->setCpm($rs->cpm);
                }
                if (isset($rs->video)) {
                    $this->ad_specifications[$key]->setVideo($rs->video);
                }
                if (isset($rs->disclaimer_medical)) {
                    $this->ad_specifications[$key]->setDisclaimerMedical($rs->disclaimer_medical);
                }
                if (isset($rs->disclaimer_specialist)) {
                    $this->ad_specifications[$key]->setDisclaimerSpecialist($rs->disclaimer_specialist);
                }
                if (isset($rs->disclaimer_supplements)) {
                    $this->ad_specifications[$key]->setDisclaimerSupplements($rs->disclaimer_supplements);
                }
                if (isset($rs->impressions_limit)) {
                    $this->ad_specifications[$key]->setImpressionsLimit($rs->impressions_limit);
                }
                if (isset($rs->impressions_limited)) {
                    $this->ad_specifications[$key]->setImpressionsLimited($rs->impressions_limited);
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
