<?php

namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Returns a list of advertising accounts.
 * Class AdsGetAccounts
 * @package VkSdk\Ads
 */
class AdsGetAccounts extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
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
        return "ads.getAccounts";
    }
}
