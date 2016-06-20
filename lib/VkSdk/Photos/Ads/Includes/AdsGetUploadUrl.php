<?php

namespace VkSdk\Photos\Ads\Includes;

use VkSdk\Includes\Request;

class AdsGetUploadUrl extends Request
{

    private $url;

    public function getUrl()
    {
        return $this->url;
    }

    public function setAdFormat($ad_format)
    {
        $this->vkarg_ad_format = $ad_format;
        return $this;
    }

    public function doRequest()
    {
        $this->setRequiredParams('ad_format');

        $this->setMethod("ads.getUploadURL");

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
            $this->url = $json->response;

            return true;
        }

        return false;
    }

}