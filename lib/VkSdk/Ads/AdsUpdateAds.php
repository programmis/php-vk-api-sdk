<?php

namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Edits ads.
 * Class AdsUpdateAds
 * @package VkSdk\Ads
 */
class AdsUpdateAds extends Request
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
        return "ads.updateAds";
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
     * Serialized JSON array of objects that describe changes in ads. Description of 'ad_edit_specification' objects see below.
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
