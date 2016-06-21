<?php

namespace VkSdk\Photos\Ads;

use VkSdk\Photos\Ads\Includes\AdsGetUploadUrl;

class SaveAdsPhoto extends AdsGetUploadUrl
{
    private $photo_url;
    private $access_token;
    private $ad_format;

    private $photo_data;

    public function setAdFormat($ad_format)
    {
        $this->ad_format = $ad_format;
        return $this;
    }

    public function getPhotoData()
    {
        return $this->photo_data;
    }

    public function setPhotoPath($photo_url)
    {
        $this->photo_url = $photo_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @param string $access_token
     * @return SaveAdsPhoto
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
        return $this;
    }

    public function doRequest()
    {
        if (!is_file($this->photo_url)) {
            return -1;
        }

        $upload_url = new AdsGetUploadUrl();
        $upload_url->setAccessToken($this->access_token);

        $result = $upload_url->setAdFormat($this->ad_format)->doRequest();
        if ($result === true) {
            $this->logger->debug("execUrl: " . $upload_url->getUrl());

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $upload_url->getUrl());
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, ["file" => "@{$this->photo_url};type=image/jfif"]);;
            $vkContent = curl_exec($ch);

            if (curl_errno($ch)) {
                $this->logger->debug("CURL returned error: " . curl_error($ch));
                return false;
            }
            curl_close($ch);

            if (!$vkContent) {
                $this->logger->debug("vkContent is empty");
            }

            $this->logger->debug("execUrl result: " . $vkContent);

            $json = json_decode($vkContent);

            if (!$json) {
                return false;
            }

            if (isset($json->photo) && $json->photo) {
                $this->photo_data = $json->photo;
                return true;
            } else {
                if (isset($json->errcode) && $json->errcode) {
                    return $json->errcode;
                }
            }

            return false;
        } else {
            return $result;
        }
    }
}
