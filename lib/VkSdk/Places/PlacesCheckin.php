<?php
namespace VkSdk\Places;

use VkSdk\Includes\Request;

/**
 * Checks a user in at the specified location.
 * Class PlacesCheckin
 *
 * @package VkSdk\Places
 */
class PlacesCheckin extends Request
{

    /**
     * @var integer
     */
    public $id;

    /**
     * List of services or websites (e.g., 'twitter', 'facebook') to which the check-in will be exported, if the user has set up the respective option.
     *
     * @return $this
     *
     * @param string $service
     */
    public function addService($service)
    {
        $this->vkarg_services[] = $service;

        return $this;
    }

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
     * Checkin ID
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
        return "places.checkin";
    }

    /**
     * '1' — Check-in will be available only for friends.; '0' — Check-in will be available for all users (default).
     *
     * @return $this
     *
     * @param boolean $friends_only
     */
    public function setFriendsOnly($friends_only)
    {
        $this->vkarg_friends_only = $friends_only;

        return $this;
    }

    /**
     * Geographical latitude of the check-in, in degrees (from '-90' to '90').
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
     * Geographical longitude of the check-in, in degrees (from '-180' to '180').
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
     * Location ID.
     *
     * @return $this
     *
     * @param integer $place_id
     */
    public function setPlaceId($place_id)
    {
        $this->vkarg_place_id = $place_id;

        return $this;
    }

    /**
     * List of services or websites (e.g., 'twitter', 'facebook') to which the check-in will be exported, if the user has set up the respective option.
     *
     * @return $this
     *
     * @param array $services
     */
    public function setServices(array $services)
    {
        $this->vkarg_services = $services;

        return $this;
    }

    /**
     * Text of the comment on the check-in (255 characters maximum; line breaks not supported).
     *
     * @return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->vkarg_text = $text;

        return $this;
    }
}
