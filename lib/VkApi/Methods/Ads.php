<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Ads
 *
 * @package VkApi\Methods
 */
class Ads
{
    use ApiTrait;

    /**
     * @return \VkSdk\Ads\AdsAddOfficeUsers
     */
    public function addOfficeUsers()
    {
        return new \VkSdk\Ads\AdsAddOfficeUsers($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsCheckLink
     */
    public function checkLink()
    {
        return new \VkSdk\Ads\AdsCheckLink($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsCreateAds
     */
    public function createAds()
    {
        return new \VkSdk\Ads\AdsCreateAds($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsCreateCampaigns
     */
    public function createCampaigns()
    {
        return new \VkSdk\Ads\AdsCreateCampaigns($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsCreateClients
     */
    public function createClients()
    {
        return new \VkSdk\Ads\AdsCreateClients($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsCreateTargetGroup
     */
    public function createTargetGroup()
    {
        return new \VkSdk\Ads\AdsCreateTargetGroup($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsDeleteAds
     */
    public function deleteAds()
    {
        return new \VkSdk\Ads\AdsDeleteAds($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsDeleteCampaigns
     */
    public function deleteCampaigns()
    {
        return new \VkSdk\Ads\AdsDeleteCampaigns($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsDeleteClients
     */
    public function deleteClients()
    {
        return new \VkSdk\Ads\AdsDeleteClients($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsDeleteTargetGroup
     */
    public function deleteTargetGroup()
    {
        return new \VkSdk\Ads\AdsDeleteTargetGroup($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetAccounts
     */
    public function getAccounts()
    {
        return new \VkSdk\Ads\AdsGetAccounts($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetAds
     */
    public function getAds()
    {
        return new \VkSdk\Ads\AdsGetAds($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetAdsLayout
     */
    public function getAdsLayout()
    {
        return new \VkSdk\Ads\AdsGetAdsLayout($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetAdsPostsReach
     */
    public function getAdsPostsReach()
    {
        return new \VkSdk\Ads\AdsGetAdsPostsReach($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetAdsTargeting
     */
    public function getAdsTargeting()
    {
        return new \VkSdk\Ads\AdsGetAdsTargeting($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetBudget
     */
    public function getBudget()
    {
        return new \VkSdk\Ads\AdsGetBudget($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetCampaigns
     */
    public function getCampaigns()
    {
        return new \VkSdk\Ads\AdsGetCampaigns($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetCategories
     */
    public function getCategories()
    {
        return new \VkSdk\Ads\AdsGetCategories($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetClients
     */
    public function getClients()
    {
        return new \VkSdk\Ads\AdsGetClients($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetDemographics
     */
    public function getDemographics()
    {
        return new \VkSdk\Ads\AdsGetDemographics($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetFloodStats
     */
    public function getFloodStats()
    {
        return new \VkSdk\Ads\AdsGetFloodStats($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetOfficeUsers
     */
    public function getOfficeUsers()
    {
        return new \VkSdk\Ads\AdsGetOfficeUsers($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetRejectionReason
     */
    public function getRejectionReason()
    {
        return new \VkSdk\Ads\AdsGetRejectionReason($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetStatistics
     */
    public function getStatistics()
    {
        return new \VkSdk\Ads\AdsGetStatistics($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetSuggestions
     */
    public function getSuggestions()
    {
        return new \VkSdk\Ads\AdsGetSuggestions($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetTargetGroups
     */
    public function getTargetGroups()
    {
        return new \VkSdk\Ads\AdsGetTargetGroups($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetTargetingStats
     */
    public function getTargetingStats()
    {
        return new \VkSdk\Ads\AdsGetTargetingStats($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetUploadURL
     */
    public function getUploadURL()
    {
        return new \VkSdk\Ads\AdsGetUploadURL($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsGetVideoUploadURL
     */
    public function getVideoUploadURL()
    {
        return new \VkSdk\Ads\AdsGetVideoUploadURL($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsImportTargetContacts
     */
    public function importTargetContacts()
    {
        return new \VkSdk\Ads\AdsImportTargetContacts($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsRemoveOfficeUsers
     */
    public function removeOfficeUsers()
    {
        return new \VkSdk\Ads\AdsRemoveOfficeUsers($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsUpdateAds
     */
    public function updateAds()
    {
        return new \VkSdk\Ads\AdsUpdateAds($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsUpdateCampaigns
     */
    public function updateCampaigns()
    {
        return new \VkSdk\Ads\AdsUpdateCampaigns($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsUpdateClients
     */
    public function updateClients()
    {
        return new \VkSdk\Ads\AdsUpdateClients($this->token);
    }

    /**
     * @return \VkSdk\Ads\AdsUpdateTargetGroup
     */
    public function updateTargetGroup()
    {
        return new \VkSdk\Ads\AdsUpdateTargetGroup($this->token);
    }
}
