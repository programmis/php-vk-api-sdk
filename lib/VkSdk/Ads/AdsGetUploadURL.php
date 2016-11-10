<?php
namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Returns URL to upload an ad photo to.
 * Class AdsGetUploadURL
 *
 * @package VkSdk\Ads
 */
class AdsGetUploadURL extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["ad_format"]);

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
        return "ads.getUploadURL";
    }

    /**
     * Ad format:; *1 — image and text;; *2 — big image;; *3 — exclusive format;; *4 — community, square image;; *7 — special app format.
     *
     * @return $this
     *
     * @param integer $ad_format
     */
    public function setAdFormat($ad_format)
    {
        $this->vkarg_ad_format = $ad_format;

        return $this;
    }
}
