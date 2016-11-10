<?php

namespace VkSdk\Places;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Places\Includes\Checkin;

/**
 * Returns a list of user check-ins at locations according to the set parameters.
 * Class PlacesGetCheckins
 * @package VkSdk\Places
 */
class PlacesGetCheckins extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var Checkin[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param Checkin $item
     */
    public function addItem(Checkin $item)
    {
        $this->items[] = $item;

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
     * Total number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of check-ins to return. (Ignored if 'timestamp' is not null.)
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * @return Checkin[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "places.getCheckins";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Places\Includes\Checkin',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * '1' — to return only check-ins with set geographical coordinates. (Ignored if 'latitude' and 'longitude' are not set.)
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
     * Geographical latitude of the initial search point, in degrees (from '-90' to '90').
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
     * Geographical longitude of the initial search point, in degrees (from '-180' to '180').
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
     * '1' — to return location information with the check-ins. (Ignored if 'place' is not set.);
     *
     * @return $this
     *
     * @param boolean $need_places
     */
    public function setNeedPlaces($need_places)
    {
        $this->vkarg_need_places = $need_places;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of check-ins. (Ignored if 'timestamp' is not null.)
     *
     * @return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * Location ID of check-ins to return. (Ignored if 'latitude' and 'longitude' are specified.)
     *
     * @return $this
     *
     * @param integer $place
     */
    public function setPlace($place)
    {
        $this->vkarg_place = $place;

        return $this;
    }

    /**
     * Specifies that only those check-ins created after the specified timestamp will be returned.
     *
     * @return $this
     *
     * @param integer $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->vkarg_timestamp = $timestamp;

        return $this;
    }

    /**
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
