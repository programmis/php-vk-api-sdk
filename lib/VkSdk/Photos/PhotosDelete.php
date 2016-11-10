<?php

namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Deletes a photo.
 * Class PhotosDelete
 * @package VkSdk\Photos
 */
class PhotosDelete extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["photo_id"]);

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
        return "photos.delete";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * ID of the user or community that owns the photo.
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

    /**
     * Photo ID.
     *
     * @return $this
     *
     * @param integer $photo_id
     */
    public function setPhotoId($photo_id)
    {
        $this->vkarg_photo_id = $photo_id;

        return $this;
    }
}
