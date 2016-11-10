<?php

namespace VkSdk\Photos;

use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\UploadResult;

/**
 * Returns the server address for market photo upload.
 * Class PhotosGetMarketUploadServer
 * @package VkSdk\Photos
 */
class PhotosGetMarketUploadServer extends Request
{

    /**
     * @var string
     */
    private $upload_url;

    /**
     * @var UploadResult $uploadResult
     */
    private $uploadResult;

    /**
     * @return UploadResult
     */
    public function getUploadResult()
    {
        return $this->uploadResult;
    }

    /**
     * @param array $files
     *
     * @return bool
     */
    public function upload($files)
    {
        $result = $this->uploadFiles($this->getUploadUrl(), $files);
        if ($result && ($json = $this->getJsonResponse())) {
            $this->uploadResult = new UploadResult();
            $this->uploadResult->fillByJson($json);

            return true;
        }

        return false;
    }

    /**
     * URL to upload the photo
     *
     * @return string
     */
    public function getUploadUrl()
    {
        return $this->upload_url;
    }

    /**
     * result in $this->getUploadUrl();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->upload_url = $json->response->upload_url;

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
        return "photos.getMarketUploadServer";
    }

    /**
     * Width of the cropped photo in px.
     *
     * @return $this
     *
     * @param integer $crop_width
     */
    public function setCropWidth($crop_width)
    {
        $this->vkarg_crop_width = $crop_width;

        return $this;
    }

    /**
     * X coordinate of the crop left upper corner.
     *
     * @return $this
     *
     * @param integer $crop_x
     */
    public function setCropX($crop_x)
    {
        $this->vkarg_crop_x = $crop_x;

        return $this;
    }

    /**
     * Y coordinate of the crop left upper corner.
     *
     * @return $this
     *
     * @param integer $crop_y
     */
    public function setCropY($crop_y)
    {
        $this->vkarg_crop_y = $crop_y;

        return $this;
    }

    /**
     * Community ID.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * '1' if you want to upload the main item photo.
     *
     * @return $this
     *
     * @param boolean $main_photo
     */
    public function setMainPhoto($main_photo)
    {
        $this->vkarg_main_photo = $main_photo;

        return $this;
    }
}
