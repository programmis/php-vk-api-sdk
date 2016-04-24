<?php

namespace VkSdk\Ads\Includes;

use VkSdk\Ads\AdsGetTargetingStats;

class AdsTargetingCriteria
{

    private $sex = 0;
    private $age_from = 0;
    private $age_to = 0;
    private $birthday = 0;
    private $country = 0;
    private $cities = array();
    private $cities_not = array();
    private $statuses = array();
    private $groups = array();
    private $apps = array();
    private $apps_not = array();
    private $districts = array();
    private $stations = array();
    private $streets = array();
    private $schools = array();
    private $positions = array();
    private $religions = array();
    private $interests = array();
    private $interest_categories = array();
    private $user_devices = array();
    private $user_os = array();
    private $user_browsers = array();
    private $retargeting_groups = array();
    private $retargeting_groups_not = array();
    private $paying;
    private $travellers = 0;
    private $school_from = 0;
    private $school_to = 0;
    private $uni_from = 0;
    private $uni_to = 0;

    private $ad_id;
    private $campaign_id;


    public function getSchoolFrom()
    {
        return $this->school_from;
    }

    public function getSchoolTo()
    {
        return $this->school_to;
    }

    public function getUniFrom()
    {
        return $this->uni_from;
    }

    public function getUniTo()
    {
        return $this->uni_to;
    }

    public function setSchoolFrom($school_from)
    {
        $this->school_from = $school_from;
        return $this;
    }

    public function setSchoolTo($school_to)
    {
        $this->school_to = $school_to;
        return $this;
    }

    public function setUniFrom($uni_from)
    {
        $this->uni_from = $uni_from;
        return $this;
    }

    public function setUniTo($uni_to)
    {
        $this->uni_to = $uni_to;
        return $this;
    }

    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    public function setCampaignId($campaign_id)
    {
        $this->campaign_id = $campaign_id;
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

    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    public function setAgeTo($age_to)
    {
        $this->age_to = $age_to;
        return $this;
    }

    public function setAgeFrom($age_from)
    {
        $this->age_from = $age_from;
        return $this;
    }

    public function setPaying($paying)
    {
        $this->paying = $paying;
        return $this;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function setCities($cities)
    {
        $this->cities = $cities;
        return $this;
    }

    public function addCity($city)
    {
        $this->cities[] = $city;
        return $this;
    }

    public function setCitiesNot($cities_not)
    {
        $this->cities_not = $cities_not;
        return $this;
    }

    public function addCityNot($city_not)
    {
        $this->cities_not[] = $city_not;
        return $this;
    }

    public function setStatuses($statuses)
    {
        $this->statuses = $statuses;
        return $this;
    }

    public function addStatus($status)
    {
        $this->statuses[] = $status;
        return $this;
    }

    public function setGroups($groups)
    {
        $this->groups = $groups;
        return $this;
    }

    public function addGroup($group)
    {
        $this->groups[] = $group;
        return $this;
    }

    public function setApps($apps)
    {
        $this->apps = $apps;
        return $this;
    }

    public function addApp($app)
    {
        $this->apps[] = $app;
        return $this;
    }

    public function setAppsNot($apps_not)
    {
        $this->apps_not = $apps_not;
        return $this;
    }

    public function addAppNot($app_not)
    {
        $this->apps_not[] = $app_not;
        return $this;
    }

    public function setDistricts($districts)
    {
        $this->districts = $districts;
        return $this;
    }

    public function addDistrict($district)
    {
        $this->districts[] = $district;
        return $this;
    }

    public function setStations($stations)
    {
        $this->stations = $stations;
        return $this;
    }

    public function addStation($station)
    {
        $this->stations[] = $station;
        return $this;
    }

    public function setStreets($streets)
    {
        $this->streets = $streets;
        return $this;
    }

    public function addStreet($street)
    {
        $this->streets[] = $street;
        return $this;
    }

    public function setSchools($schools)
    {
        $this->schools = $schools;
        return $this;
    }

    public function addSchool($school)
    {
        $this->schools[] = $school;
        return $this;
    }

    public function setPositions($positions)
    {
        $this->positions = $positions;
        return $this;
    }

    public function addPosition($position)
    {
        $this->positions[] = $position;
        return $this;
    }

    public function setReligions($religions)
    {
        $this->religions = $religions;
        return $this;
    }

    public function addReligion($religion)
    {
        $this->religions[] = $religion;
        return $this;
    }

    public function setInterests($interests)
    {
        $this->interests = $interests;
        return $this;
    }

    public function addInterest($interest)
    {
        $this->interests[] = $interest;
        return $this;
    }

    public function setInterestCategories($interest_categories)
    {
        $this->interest_categories = $interest_categories;
        return $this;
    }

    public function addInterestCategory($interest_category)
    {
        $this->interest_categories[] = $interest_category;
        return $this;
    }

    public function setUserDevices($user_devices)
    {
        $this->user_devices = $user_devices;
        return $this;
    }

    public function setUserOs($user_os)
    {
        $this->user_os = $user_os;
        return $this;
    }

    public function setUserBrowsers($user_browsers)
    {
        $this->user_browsers = $user_browsers;
        return $this;
    }

    public function setRetargetingGroups($retargeting_groups)
    {
        $this->retargeting_groups = $retargeting_groups;
        return $this;
    }

    public function setRetargetingGroupsNot($retargeting_groups_not)
    {
        $this->retargeting_groups_not = $retargeting_groups_not;
        return $this;
    }

    public function addUserDevice($user_device)
    {
        $this->user_devices[] = $user_device;
        return $this;
    }

    public function addUserOs($user_os)
    {
        $this->user_os[] = $user_os;
        return $this;
    }

    public function addUserBrowser($user_browser)
    {
        $this->user_browsers[] = $user_browser;
        return $this;
    }

    public function addRetargetingGroup($retargeting_group)
    {
        $this->retargeting_groups[] = $retargeting_group;
        return $this;
    }

    public function addRetargetingGroupNot($retargeting_group_not)
    {
        $this->retargeting_groups_not[] = $retargeting_group_not;
        return $this;
    }

    public function getArray()
    {
        $array = array();

        if ($this->school_from) {
            $array['school_from'] = $this->school_from;
        }
        if ($this->school_to) {
            $array['school_to'] = $this->school_to;
        }
        if ($this->uni_from) {
            $array['uni_from'] = $this->uni_from;
        }
        if ($this->uni_to) {
            $array['uni_to'] = $this->uni_to;
        }
        if ($this->age_from) {
            $array['age_from'] = $this->age_from;
        }
        if ($this->age_to) {
            $array['age_to'] = $this->age_to;
        }
        if ($this->birthday) {
            $array['birthday'] = $this->birthday;
        }
        if ($this->country) {
            $array['country'] = $this->country;
        }
        if ($this->travellers) {
            $array['travellers'] = $this->travellers;
        }
        if ($this->sex) {
            $array['sex'] = $this->sex;
        }
        if (count($this->cities)) {
            $array["cities"] = implode(",", $this->cities);
        }
        if (count($this->cities_not)) {
            $array["cities_not"] = implode(",", $this->cities_not);
        }
        if (count($this->statuses)) {
            $array["statuses"] = implode(",", $this->statuses);
        }
        if (count($this->groups)) {
            $array["groups"] = implode(",", $this->groups);
        }
        if (count($this->apps)) {
            $array["apps"] = implode(",", $this->apps);
        }
        if (count($this->apps_not)) {
            $array["apps_not"] = implode(",", $this->apps_not);
        }
        if (count($this->districts)) {
            $array["districts"] = implode(",", $this->districts);
        }
        if (count($this->stations)) {
            $array["stations"] = implode(",", $this->stations);
        }
        if (count($this->streets)) {
            $array["streets"] = implode(",", $this->streets);
        }
        if (count($this->schools)) {
            $array["schools"] = implode(",", $this->schools);
        }
        if (count($this->positions)) {
            $array["positions"] = implode(",", $this->positions);
        }
        if (count($this->religions)) {
            $array["religions"] = implode(",", $this->religions);
        }
        if (count($this->interests)) {
            $array["interests"] = implode(",", $this->interests);
        }
        if (count($this->interest_categories)) {
            $array["interest_categories"] = implode(",", $this->interest_categories);
        }
        if (count($this->user_devices)) {
            $array["user_devices"] = implode(",", $this->user_devices);
        }
        if (count($this->user_os)) {
            $array["user_os"] = implode(",", $this->user_os);
        }
        if (count($this->user_browsers)) {
            $array["user_browsers"] = implode(",", $this->user_browsers);
        }
        if (count($this->retargeting_groups)) {
            $array["retargeting_groups"] = implode(",", $this->retargeting_groups);
        }
        if (count($this->retargeting_groups_not)) {
            $array["retargeting_groups_not"] = implode(",", $this->retargeting_groups_not);
        }
        if ($this->paying) {
            $array["paying"] = $this->paying;
        }

        return $array;
    }

    public function getJSON()
    {
        $array = $this->getArray();

        return json_encode($array);
    }

    public function setTravellers($travellers)
    {
        $this->travellers = $travellers;
        return $this;
    }


}