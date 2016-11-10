<?php

namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Saves photos after successful uploading.
 * Class PhotosSave
 * @package VkSdk\Photos
 */
class PhotosSave extends Request
{

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
        return "photos.save";
    }

    /**
     * ID of the album to save photos to.
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
     * Text describing the photo. 2048 digits max.
     *
     * @return $this
     *
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->vkarg_caption = $caption;

        return $this;
    }

    /**
     * ID of the community to save photos to.
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
     * Parameter returned when .
     *
     * @return $this
     *
     * @param string $hash
     */
    public function setHash($hash)
    {
        $this->vkarg_hash = $hash;

        return $this;
    }

    /**
     * Geographical latitude, in degrees (from '-90' to '90').
     *
     * @return $this
     *
     * @param number $latitude
     */
    public function setLatitude(number $latitude)
    {
        $this->vkarg_latitude = $latitude;

        return $this;
    }

    /**
     * Geographical longitude, in degrees (from '-180' to '180').
     *
     * @return $this
     *
     * @param number $longitude
     */
    public function setLongitude(number $longitude)
    {
        $this->vkarg_longitude = $longitude;

        return $this;
    }

    /**
     * Parameter returned when .
     *
     * @return $this
     *
     * @param string $photos_list
     */
    public function setPhotosList($photos_list)
    {
        $this->vkarg_photos_list = $photos_list;

        return $this;
    }

    /**
     * Parameter returned when .
     *
     * @return $this
     *
     * @param integer $server
     */
    public function setServer($server)
    {
        $this->vkarg_server = $server;

        return $this;
    }
}
