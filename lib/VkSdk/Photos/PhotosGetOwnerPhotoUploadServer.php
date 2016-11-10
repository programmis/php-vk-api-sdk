<?php

namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Returns an upload server address for a profile or community photo.
 * Class PhotosGetOwnerPhotoUploadServer
 * @package VkSdk\Photos
 */
class PhotosGetOwnerPhotoUploadServer extends Request
{

    /**
     * @var string
     */
    private $upload_url;

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
        return "photos.getOwnerPhotoUploadServer";
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
     * identifier of a community or current user.; ; "Note that community id must be negative.; 'owner_id=1' – user; 'owner_id=-1' – community; "
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }
}
