<?php
namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Returns the server address for market album photo upload.
 * Class PhotosGetMarketAlbumUploadServer
 *
 * @package VkSdk\Photos
 */
class PhotosGetMarketAlbumUploadServer extends Request
{

    /**
     * @var string
     */
    public $upload_url;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id"]);

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
        return "photos.getMarketAlbumUploadServer";
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
