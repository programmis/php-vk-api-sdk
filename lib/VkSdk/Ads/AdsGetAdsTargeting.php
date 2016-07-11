<?php

namespace VkSdk\Ads;

use VkSdk\Ads\Includes\AdsTargetingCriteria;
use VkSdk\Includes\Request;

class AdsGetAdsTargeting extends Request
{
    private $campaign_ids = [];
    private $ad_ids = [];

    private $criteria = [];


    public function getCriteria()
    {
        return $this->criteria;
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
        
        $this->setMethod("ads.getAdsTargeting");

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
                $this->criteria = new AdsTargetingCriteria();
                if (isset($rs->id)) {
                    $this->criteria->setAdId($rs->id);
                }
                if (isset($rs->campaign_id)) {
                    $this->criteria->setCampaignId($rs->campaign_id);
                }
                if (isset($rs->sex)) {
                    $this->criteria->setSex($rs->sex);
                }
                if (isset($rs->age_from)) {
                    $this->criteria->setAgeFrom($rs->age_from);
                }
                if (isset($rs->age_to)) {
                    $this->criteria->setAgeTo($rs->age_to);
                }
                if (isset($rs->birthday)) {
                    $this->criteria->setBirthday($rs->birthday);
                }
                if (isset($rs->country)) {
                    $this->criteria->setCountry($rs->country);
                }
                if (isset($rs->cities)) {
                    $this->criteria->setCities(explode(",", $rs->cities));
                }
                if (isset($rs->cities_not)) {
                    $this->criteria->setCitiesNot(explode(",", $rs->cities_not));
                }
                if (isset($rs->statuses)) {
                    $this->criteria->setStatuses(explode(",", $rs->statuses));
                }
                if (isset($rs->groups)) {
                    $this->criteria->setGroups(explode(",", $rs->groups));
                }
                if (isset($rs->apps)) {
                    $this->criteria->setApps(explode(",", $rs->apps));
                }
                if (isset($rs->apps_not)) {
                    $this->criteria->setAppsNot(explode(",", $rs->apps_not));
                }
                if (isset($rs->districts)) {
                    $this->criteria->setDistricts(explode(",", $rs->districts));
                }
                if (isset($rs->stations)) {
                    $this->criteria->setStations(explode(",", $rs->stations));
                }
                if (isset($rs->streets)) {
                    $this->criteria->setStreets(explode(",", $rs->streets));
                }
                if (isset($rs->scholls)) {
                    $this->criteria->setSchools(explode(",", $rs->scholls));
                }
                if (isset($rs->positions)) {
                    $this->criteria->setPositions(explode(",", $rs->positions));
                }
                if (isset($rs->religions)) {
                    $this->criteria->setReligions(explode(",", $rs->religions));
                }
                if (isset($rs->interests)) {
                    $this->criteria->setInterests(explode(",", $rs->interests));
                }
                if (isset($rs->interest_categories)) {
                    $this->criteria->setInterestCategories(explode(",", $rs->interest_categories));
                }
                if (isset($rs->user_devices)) {
                    $this->criteria->setUserDevices(explode(",", $rs->user_devices));
                }
                if (isset($rs->user_os)) {
                    $this->criteria->setUserOs(explode(",", $rs->user_os));
                }
                if (isset($rs->user_browsers)) {
                    $this->criteria->setUserBrowsers(explode(",", $rs->user_browsers));
                }
                if (isset($rs->retargeting_groups)) {
                    $this->criteria->setRetargetingGroups(explode(",", $rs->retargeting_groups));
                }
                if (isset($rs->retargeting_groups_not)) {
                    $this->criteria->setRetargetingGroupsNot(explode(",", $rs->retargeting_groups_not));
                }
                if (isset($rs->paying)) {
                    $this->criteria->setPaying($rs->paying);
                }
                if (isset($rs->travellers)) {
                    $this->criteria->setTravellers($rs->travellers);
                }
                if (isset($rs->school_from)) {
                    $this->criteria->setSchoolFrom($rs->school_from);
                }
                if (isset($rs->school_to)) {
                    $this->criteria->setSchoolTo($rs->school_to);
                }
                if (isset($rs->uni_from)) {
                    $this->criteria->setUniFrom($rs->uni_from);
                }
                if (isset($rs->uni_to)) {
                    $this->criteria->setUniTo($rs->uni_to);
                }
            }

            return true;
        }

        return false;
    }

}