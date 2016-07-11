<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 30.05.16
 * Time: 21:45
 */

namespace VkSdk\Ads;


use VkSdk\Ads\Includes\AdsAd;
use VkSdk\Includes\Request;

class AdsGetAdsLayout extends Request
{
    private $campaign_ids = [];
    private $ad_ids = [];

    private $ads = [];

    public function getAds()
    {
        return $this->ads;
    }

    public function setAdIds($ad_ids)
    {
        $this->ad_ids = $ad_ids;
        return $this;
    }

    public function addCampaignId($campaign_id)
    {
        $this->campaign_ids[] = $campaign_id;
        return $this;
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

        $this->setMethod("ads.getAdsLayout");

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
                $this->ads[$key] = new AdsAd();
                if (isset($rs->id)) {
                    $this->ads[$key]->setId($rs->id);
                }
                if (isset($rs->campaign_id)) {
                    $this->ads[$key]->setCampaignId($rs->campaign_id);
                }
                if (isset($rs->ad_format)) {
                    $this->ads[$key]->setAdFormat($rs->ad_format);
                }
                if (isset($rs->cost_type)) {
                    $this->ads[$key]->setCostType($rs->cost_type);
                }
                if (isset($rs->video)) {
                    $this->ads[$key]->setVideo($rs->video);
                }
                if (isset($rs->title)) {
                    $this->ads[$key]->setTitle($rs->title);
                }
                if (isset($rs->description)) {
                    $this->ads[$key]->setDescription($rs->description);
                }
                if (isset($rs->link_url)) {
                    $this->ads[$key]->setLinkUrl($rs->link_url);
                }
                if (isset($rs->link_domain)) {
                    $this->ads[$key]->setLinkDomain($rs->link_domain);
                }
                if (isset($rs->preview_link)) {
                    $this->ads[$key]->setPreviewLink($rs->preview_link);
                }
                if (isset($rs->image_src)) {
                    $this->ads[$key]->setImageSrc($rs->image_src);
                }
                if (isset($rs->image_src_2x)) {
                    $this->ads[$key]->setImageSrc2x($rs->image_src_2x);
                }
            }

            return true;
        }

        return false;
    }
}