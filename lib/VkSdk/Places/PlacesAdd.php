<?php

namespace VkSdk\Places;

use VkSdk\Includes\Request;

/**
 * Adds a new location to the location database.
 * Class PlacesAdd
 * @package VkSdk\Places
 */
class PlacesAdd extends Request
{

    /**
     * @var integer
     */
    private $id;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["title", "latitude", "longitude"]);

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
     * Place ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "places.add";
    }

    /**
     * Street address of the location (e.g., '125 Elm Street').
     *
     * @return $this
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->vkarg_address = $address;

        return $this;
    }

    /**
     * ID of the location's city. To get city IDs, use the  method.
     *
     * @return $this
     *
     * @param integer $city
     */
    public function setCity($city)
    {
        $this->vkarg_city = $city;

        return $this;
    }

    /**
     * ID of the location's country. To get country IDs, use the  method.
     *
     * @return $this
     *
     * @param integer $country
     */
    public function setCountry($country)
    {
        $this->vkarg_country = $country;

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
     * Title of the location.
     *
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->vkarg_title = $title;

        return $this;
    }

    /**
     * ID of the location's type (e.g., '1' — Home, '2' — Work). To get location type IDs, use the   method.
     *
     * @return $this
     *
     * @param integer $type
     */
    public function setType($type)
    {
        $this->vkarg_type = $type;

        return $this;
    }
}
