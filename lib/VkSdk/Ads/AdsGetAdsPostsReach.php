<?php

namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Allows to get detailed information about the ad post reach.
 * Class AdsGetAdsPostsReach
 * @package VkSdk\Ads
 */
class AdsGetAdsPostsReach extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id", "ads_ids"]);

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
        return "ads.getAdsPostsReach";
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
     * Ads IDS separated by comma.
     *
     * @return $this
     *
     * @param string $ads_ids
     */
    public function setAdsIds($ads_ids)
    {
        $this->vkarg_ads_ids = $ads_ids;

        return $this;
    }
}
