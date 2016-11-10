<?php

namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Creates ads.
 * Class AdsCreateAds
 * @package VkSdk\Ads
 */
class AdsCreateAds extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id", "data"]);

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
        return "ads.createAds";
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
     * Serialized JSON array of objects that describe created ads. Description of 'ad_specification' objects see below.
     *
     * @return $this
     *
     * @param string $data
     */
    public function setData($data)
    {
        $this->vkarg_data = $data;

        return $this;
    }
}
