<?php
namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Makes a photo into an album cover.
 * Class PhotosMakeCover
 *
 * @package VkSdk\Photos
 */
class PhotosMakeCover extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

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
        return "photos.makeCover";
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
     * Album ID.
     *
     * @return $this
     *
     * @param integer $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->vkarg_album_id = $album_id;

        return $this;
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
