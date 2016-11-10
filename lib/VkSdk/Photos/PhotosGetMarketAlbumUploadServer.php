<?php

namespace VkSdk\Photos;

use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\UploadResult;

/**
 * Returns the server address for market album photo upload.
 * Class PhotosGetMarketAlbumUploadServer
 *
*@package VkSdk\Photos
 */
class PhotosGetMarketAlbumUploadServer extends Request
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
        return "photos.getMarketAlbumUploadServer";
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
}
