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
                $criteria = new AdsTargetingCriteria();
                if (isset($rs->id)) {
                    $criteria->setAdId($rs->id);
                }
                if (isset($rs->campaign_id)) {
                    $criteria->setCampaignId($rs->campaign_id);
                }
                if (isset($rs->sex)) {
                    $criteria->setSex($rs->sex);
                }
                if (isset($rs->age_from)) {
                    $criteria->setAgeFrom($rs->age_from);
                }
                if (isset($rs->age_to)) {
                    $criteria->setAgeTo($rs->age_to);
                }
                if (isset($rs->birthday)) {
                    $criteria->setBirthday($rs->birthday);
                }
                if (isset($rs->country)) {
                    $criteria->setCountry($rs->country);
                }
                if (isset($rs->cities)) {
                    $criteria->setCities(explode(",", $rs->cities));
                }
                if (isset($rs->cities_not)) {
                    $criteria->setCitiesNot(explode(",", $rs->cities_not));
                }
                if (isset($rs->statuses)) {
                    $criteria->setStatuses(explode(",", $rs->statuses));
                }
                if (isset($rs->groups)) {
                    $criteria->setGroups(explode(",", $rs->groups));
                }
                if (isset($rs->apps)) {
                    $criteria->setApps(explode(",", $rs->apps));
                }
                if (isset($rs->apps_not)) {
                    $criteria->setAppsNot(explode(",", $rs->apps_not));
                }
                if (isset($rs->districts)) {
                    $criteria->setDistricts(explode(",", $rs->districts));
                }
                if (isset($rs->stations)) {
                    $criteria->setStations(explode(",", $rs->stations));
                }
                if (isset($rs->streets)) {
                    $criteria->setStreets(explode(",", $rs->streets));
                }
                if (isset($rs->scholls)) {
                    $criteria->setSchools(explode(",", $rs->scholls));
                }
                if (isset($rs->positions)) {
                    $criteria->setPositions(explode(",", $rs->positions));
                }
                if (isset($rs->religions)) {
                    $criteria->setReligions(explode(",", $rs->religions));
                }
                if (isset($rs->interests)) {
                    $criteria->setInterests(explode(",", $rs->interests));
                }
                if (isset($rs->interest_categories)) {
                    $criteria->setInterestCategories(explode(",", $rs->interest_categories));
                }
                if (isset($rs->user_devices)) {
                    $criteria->setUserDevices(explode(",", $rs->user_devices));
                }
                if (isset($rs->user_os)) {
                    $criteria->setUserOs(explode(",", $rs->user_os));
                }
                if (isset($rs->user_browsers)) {
                    $criteria->setUserBrowsers(explode(",", $rs->user_browsers));
                }
                if (isset($rs->retargeting_groups)) {
                    $criteria->setRetargetingGroups(explode(",", $rs->retargeting_groups));
                }
                if (isset($rs->retargeting_groups_not)) {
                    $criteria->setRetargetingGroupsNot(explode(",", $rs->retargeting_groups_not));
                }
                if (isset($rs->paying)) {
                    $criteria->setPaying($rs->paying);
                }
                if (isset($rs->travellers)) {
                    $criteria->setTravellers($rs->travellers);
                }
                if (isset($rs->school_from)) {
                    $criteria->setSchoolFrom($rs->school_from);
                }
                if (isset($rs->school_to)) {
                    $criteria->setSchoolTo($rs->school_to);
                }
                if (isset($rs->uni_from)) {
                    $criteria->setUniFrom($rs->uni_from);
                }
                if (isset($rs->uni_to)) {
                    $criteria->setUniTo($rs->uni_to);
                }
                $this->criteria[] = $criteria;
            }

            return true;
        }

        return false;
    }

}