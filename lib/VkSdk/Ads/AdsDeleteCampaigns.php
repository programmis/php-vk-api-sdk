<?php

namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Archives advertising campaigns.
 * Class AdsDeleteCampaigns
 * @package VkSdk\Ads
 */
class AdsDeleteCampaigns extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id", "ids"]);

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
        return "ads.deleteCampaigns";
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
     * Serialized JSON array with IDs of deleted campaigns.
     *
     * @return $this
     *
     * @param string $ids
     */
    public function setIds($ids)
    {
        $this->vkarg_ids = $ids;

        return $this;
    }
}
