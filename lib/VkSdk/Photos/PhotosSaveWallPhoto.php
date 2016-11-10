<?php

namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Saves a photo to a user's or community's wall after being uploaded.
 * Class PhotosSaveWallPhoto
 * @package VkSdk\Photos
 */
class PhotosSaveWallPhoto extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["photo"]);

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
        return "photos.saveWallPhoto";
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
     * ID of community on whose wall the photo will be saved.
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
     * Parameter returned when the .
     *
     * @return $this
     *
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->vkarg_photo = $photo;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $server
     */
    public function setServer($server)
    {
        $this->vkarg_server = $server;

        return $this;
    }

    /**
     * ID of the user on whose wall the photo will be saved.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
