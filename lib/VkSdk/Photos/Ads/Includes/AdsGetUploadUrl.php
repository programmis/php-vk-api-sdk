<?php

namespace VkSdk\Photos\Ads\Includes;

use VkSdk\Includes\Request;

class AdsGetUploadUrl extends Request
{

    private $ad_format;

    private $url;

    public function getUrl()
    {
        return $this->url;
    }

    public function setAdFormat($ad_format)
    {
        $this->ad_format = $ad_format;
        return $this;
    }

    public function doRequest()
    {
        if (!$this->ad_format) {
            throw new \Exception("not fill ad_format");
        }

        $this->setMethod("Ads.getUploadURL");

        $this->setParameter("ad_format", $this->ad_format);

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