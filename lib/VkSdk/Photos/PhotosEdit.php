<?php

namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Edits the caption of a photo.
 * Class PhotosEdit
 * @package VkSdk\Photos
 */
class PhotosEdit extends Request
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
        return "photos.edit";
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
     * New caption for the photo. If this parameter is not set, it is considered to be equal to an empty string.
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
     * @return $this
     *
     * @param boolean $delete_place
     */
    public function setDeletePlace($delete_place)
    {
        $this->vkarg_delete_place = $delete_place;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $foursquare_id
     */
    public function setFoursquareId($foursquare_id)
    {
        $this->vkarg_foursquare_id = $foursquare_id;

        return $this;
    }

    /**
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

    /**
     * @return $this
     *
     * @param string $place_str
     */
    public function setPlaceStr($place_str)
    {
        $this->vkarg_place_str = $place_str;

        return $this;
    }
}
