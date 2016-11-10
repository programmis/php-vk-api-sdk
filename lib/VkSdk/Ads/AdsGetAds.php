<?php
namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Returns number of ads.
 * Class AdsGetAds
 *
 * @package VkSdk\Ads
 */
class AdsGetAds extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "ads.getAds";
    }

    /**
     * Advertising account ID.
     *
     * @return $this
     *
     * @param integer $account_id
     */
    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;

        return $this;
    }

    /**
     * Filter by ads. ; Serialized JSON array with ad IDs. If the parameter is null, all ads will be shown.;
     *
     * @return $this
     *
     * @param string $ad_ids
     */
    public function setAdIds($ad_ids)
    {
        $this->vkarg_ad_ids = $ad_ids;

        return $this;
    }

    /**
     * Filter by advertising campaigns. ; Serialized JSON array with campaign IDs. If the parameter is null, ads of all campaigns will be shown.;
     *
     * @return $this
     *
     * @param string $campaign_ids
     */
    public function setCampaignIds($campaign_ids)
    {
        $this->vkarg_campaign_ids = $campaign_ids;

        return $this;
    }

    /**
     * 'Available and required for advertising agencies.' ID of the client ads are retrieved from.
     *
     * @return $this
     *
     * @param integer $client_id
     */
    public function setClientId($client_id)
    {
        $this->vkarg_client_id = $client_id;

        return $this;
    }

    /**
     * Flag that specifies whether archived ads shall be shown:; *0 — show only active ads;; *1 — show all ads.;
     *
     * @return $this
     *
     * @param boolean $include_deleted
     */
    public function setIncludeDeleted($include_deleted)
    {
        $this->vkarg_include_deleted = $include_deleted;

        return $this;
    }

    /**
     * Limit of number of returned ads. Used only if ad_ids parameter is null, and 'campaign_ids' parameter contains ID of only one campaign.
     *
     * @return $this
     *
     * @param integer $limit
     */
    public function setLimit($limit)
    {
        $this->vkarg_limit = $limit;

        return $this;
    }

    /**
     * Offset. Used in the same cases as 'limit' parameter.
     *
     * @return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }
}
