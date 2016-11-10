<?php

namespace VkSdk\Users;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserFull;

/**
 * Indexes current user location and returns nearby users.
 * Class UsersGetNearby
 * @package VkSdk\Users
 */
class UsersGetNearby extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var UserFull[]
     */
    private $items;

    /**
     * list of additional fields to return.; Available values: sex, bdate, city, country, photo_50, photo_100, photo_200_orig, photo_200, photo_400_orig, photo_max, photo_max_orig, online, online_mobile, domain, has_mobile, contacts, connections, site, education, universities, schools, can_post, can_see_all_posts, can_see_audio, can_write_private_message, status, last_seen, common_count, relation, relatives, counters, screen_name, maiden_name, timezone, occupation
     *
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->vkarg_fields[] = $field;

        return $this;
    }

    /**
     * @return $this
     *
     * @param UserFull $item
     */
    public function addItem(UserFull $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["latitude", "longitude"]);

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
     * Users number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return UserFull[]
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
        return "users.getNearby";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Users\Includes\UserFull',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * current location accuracy in meters
     *
     * @return $this
     *
     * @param integer $accuracy
     */
    public function setAccuracy($accuracy)
    {
        $this->vkarg_accuracy = $accuracy;

        return $this;
    }

    /**
     * list of additional fields to return.; Available values: sex, bdate, city, country, photo_50, photo_100, photo_200_orig, photo_200, photo_400_orig, photo_max, photo_max_orig, online, online_mobile, domain, has_mobile, contacts, connections, site, education, universities, schools, can_post, can_see_all_posts, can_see_audio, can_write_private_message, status, last_seen, common_count, relation, relatives, counters, screen_name, maiden_name, timezone, occupation
     *
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->vkarg_fields = $fields;

        return $this;
    }

    /**
     * geographic latitude of the place a user is located, in degrees (from -90 to 90)
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
     * geographic longitude of the place a user is located, in degrees (from -180 to 180)
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
     * Case for declension of user name and surname: ; nom –nominative (default) ; gen – genitive ; dat – dative ; acc – accusative ; ins – instrumental ; abl – prepositional
     *
     * @return $this
     *
     * @param string $name_case
     */
    public function setNameCase($name_case)
    {
        $this->vkarg_name_case = $name_case;

        return $this;
    }

    /**
     * search zone radius type (1 to 4); :* 1 – 300 m;; :* 2 – 2400 m;; :* 3 – 18 km;; :* 4 – 150 km.
     *
     * @return $this
     *
     * @param integer $radius
     */
    public function setRadius($radius)
    {
        $this->vkarg_radius = $radius;

        return $this;
    }

    /**
     * time when a user disappears from location search results, in seconds
     *
     * @return $this
     *
     * @param integer $timeout
     */
    public function setTimeout($timeout)
    {
        $this->vkarg_timeout = $timeout;

        return $this;
    }
}
