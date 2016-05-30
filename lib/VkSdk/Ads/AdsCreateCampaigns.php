<?php

namespace VkSdk\Ads;

use VkSdk\Ads\Includes\AdsCampaignSpecification;
use VkSdk\Includes\Request;

class AdsCreateCampaigns extends Request
{

    private $campaign_specification;

    private $ids = array();

    public function getIds()
    {
        return $this->ids;
    }

    public function addCampaignSpecification(AdsCampaignSpecification $adsCampaignSpecification)
    {
        return $this->campaign_specification[] = $adsCampaignSpecification;
    }

    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;
        return $this;
    }

    private function campaignSpecificationsToJSON()
    {
        $campaign = array();

        foreach ($this->campaign_specification as $cs) {
            /**
             * @var AdsCampaignSpecification $cs
             */
            $campaign[] = $cs->getArray();
        }

        return json_encode($campaign);
    }

    public function doRequest()
    {
        $this->setRequiredParams('account_id');

        $this->setMethod("ads.createCampaigns");

        $this->setParameter("data", $this->campaignSpecificationsToJSON());

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
            foreach ($json->response as $rs) {
                $this->ids[] = $rs->id;
            }

            return true;
        }

        return false;
    }

}