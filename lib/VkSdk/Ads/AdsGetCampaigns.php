<?php

namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Returns a list of campaigns in an advertising account.
 * Class AdsGetCampaigns
 * @package VkSdk\Ads
 */
class AdsGetCampaigns extends Request
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
        return "ads.getCampaigns";
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
     * Filter of advertising campaigns to show. ; Serialized JSON array with campaign IDs. Only campaigns that exist in 'campaign_ids' and belong to the specified advertising account will be shown. If the parameter is null, all campaigns will be shown.;
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
     * 'For advertising agencies'. ID of the client advertising campaigns are retrieved from.
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
     * Flag that specifies whether archived ads shall be shown.; *0 — show only active campaigns;; *1 — show all campaigns.;
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
}
