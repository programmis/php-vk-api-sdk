<?php

namespace VkSdk\Ads\Includes;

class AdsAdSpecification
{

    private $ad_id;
    private $campaign_id;
    private $ad_format = 2;
    private $cost_type = 0;
    private $cpc = 0.0;
    private $cpm = 0.0;
    private $impressions_limit;
    private $ad_platform;
    private $all_limit;
    private $category1_id;
    private $category2_id;
    private $status;
    private $name;
    private $title;
    private $description;
    private $link_url;
    private $link_domain;
    private $photo;
    private $video;
    private $disclaimer;
    private $approved;
    private $age_restriction;

    private $create_time;
    private $update_time;

    private $criteria;

    private $type;

    public function __construct($type)
    {
        $this->type = $type;
        if ($this->type != Specifications::GET) {
            $this->criteria = new AdsTargetingCriteria();
        }
    }

    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function setUpdateTime($update_time)
    {
        $this->update_time = $update_time;
        return $this;
    }

    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAgeRestriction()
    {
        return $this->age_restriction;
    }

    /**
     * @param mixed $age_restriction
     * @return AdsAdSpecification
     */
    public function setAgeRestriction($age_restriction)
    {
        $this->age_restriction = $age_restriction;
        return $this;
    }

    /**
     * @return AdsTargetingCriteria
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * @param AdsTargetingCriteria $criteria
     * @return AdsAdSpecification
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return AdsAdSpecification
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getApproved()
    {
        return $this->approved;
    }

    public function setApproved($approved)
    {
        $this->approved = $approved;
        return $this;
    }

    public function getAdId()
    {
        return $this->ad_id;
    }

    public function setAdId($ad_id)
    {
        $this->ad_id = $ad_id;
        return $this;
    }

    public function getArray()
    {
        $array = [];

        if ($this->type == Specifications::CREATE) {
            $array["campaign_id"] = $this->campaign_id;
            $array["cost_type"] = $this->cost_type;
            $array["ad_format"] = $this->ad_format;
        } else {
            if ($this->type == Specifications::UPDATE) {
                $array['ad_id'] = $this->ad_id;
            }
        }

        if ($this->age_restriction) {
            $array['age_restriction'] = $this->age_restriction;
        }
        if ($this->cpc) {
            $array["cpc"] = $this->cpc;
        }
        if ($this->cpm) {
            $array["cpm"] = $this->cpm;
        }
        if ($this->link_url) {
            $array["link_url"] = $this->link_url;
        }
        if ($this->ad_platform) {
            $array["ad_platform"] = $this->ad_platform;
        }
        if ($this->title) {
            $array["title"] = $this->title;
        }
        if ($this->photo) {
            $array["photo"] = $this->photo;
        }
        if ($this->impressions_limit) {
            $array['impressions_limit'] = $this->impressions_limit;
        }
        if ($this->all_limit) {
            $array['all_limit'] = $this->all_limit;
        }
        if ($this->category1_id) {
            $array['category1_id'] = $this->category1_id;
        }
        if ($this->category2_id) {
            $array['category2_id'] = $this->category2_id;
        }
        if ($this->status) {
            $array['status'] = $this->status;
        }
        if ($this->name) {
            $array['name'] = $this->name;
        }
        if ($this->description) {
            $array['description'] = $this->description;
        }
        if ($this->link_domain) {
            $array['link_domain'] = $this->link_domain;
        }
        if ($this->video) {
            $array['video'] = $this->video;
        }
        if ($this->disclaimer) {
            $array['disclaimer'] = $this->disclaimer;
        }

        if ($this->type != Specifications::GET) {
            $array = array_merge($array, $this->criteria->getArray());
        }

        return $array;
    }

    public function setCampaignId($campaign_id)
    {
        $this->campaign_id = $campaign_id;
        return $this;
    }

    public function setAdFormat($ad_format)
    {
        $this->ad_format = $ad_format;
        return $this;
    }

    public function setCostType($cost_type)
    {
        $this->cost_type = $cost_type;
        return $this;
    }

    public function setCpc($cpc)
    {
        $this->cpc = $cpc;
        return $this;
    }

    public function setCpm($cpm)
    {
        $this->cpm = $cpm;
        return $this;
    }

    public function setImpressionsLimit($impressions_limit)
    {
        $this->impressions_limit = $impressions_limit;
        return $this;
    }

    public function setAdPlatform($ad_platform)
    {
        $this->ad_platform = $ad_platform;
        return $this;
    }

    public function setAllLimit($all_limit)
    {
        $this->all_limit = $all_limit;
        return $this;
    }

    public function setCategory1Id($category1_id)
    {
        $this->category1_id = $category1_id;
        return $this;
    }

    public function setCategory2Id($category2_id)
    {
        $this->category2_id = $category2_id;
        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function setLinkUrl($link_url)
    {
        $this->link_url = $link_url;
        return $this;
    }

    public function setLinkDomain($link_domain)
    {
        $this->link_domain = $link_domain;
        return $this;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    public function setVideo($video)
    {
        $this->video = $video;
        return $this;
    }

    public function setDisclaimer($disclaimer)
    {
        $this->disclaimer = $disclaimer;
        return $this;
    }

}