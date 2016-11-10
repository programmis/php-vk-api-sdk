<?php

namespace VkSdk\Places\Includes;

use lib\AutoFillObject;

/**
 * Class Checkin
 * @package VkSdk\Places\Includes
 */
class Checkin
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var integer
     */
    private $distance;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var number
     */
    private $latitude;

    /**
     * @var number
     */
    private $longitude;

    /**
     * @var integer
     */
    private $place_city;

    /**
     * @var integer
     */
    private $place_country;

    /**
     * @var string
     */
    private $place_icon;

    /**
     * @var integer
     */
    private $place_id;

    /**
     * @var string
     */
    private $place_title;

    /**
     * @var string
     */
    private $place_type;

    /**
     * @var string
     */
    private $text;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * Date when the checkin has been added in Unixtime
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return $this
     *
     * @param integer $date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Distance to the place
     *
     * @return integer
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @return $this
     *
     * @param integer $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
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
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Place latitude
     *
     * @return number
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return $this
     *
     * @param number $latitude
     */
    public function setLatitude(number $latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Place longitude
     *
     * @return number
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @return $this
     *
     * @param number $longitude
     */
    public function setLongitude(number $longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * City ID
     *
     * @return integer
     */
    public function getPlaceCity()
    {
        return $this->place_city;
    }

    /**
     * @return $this
     *
     * @param integer $place_city
     */
    public function setPlaceCity($place_city)
    {
        $this->place_city = $place_city;

        return $this;
    }

    /**
     * Country ID
     *
     * @return integer
     */
    public function getPlaceCountry()
    {
        return $this->place_country;
    }

    /**
     * @return $this
     *
     * @param integer $place_country
     */
    public function setPlaceCountry($place_country)
    {
        $this->place_country = $place_country;

        return $this;
    }

    /**
     * URL of the place's icon
     *
     * @return string
     */
    public function getPlaceIcon()
    {
        return $this->place_icon;
    }

    /**
     * @return $this
     *
     * @param string $place_icon
     */
    public function setPlaceIcon($place_icon)
    {
        $this->place_icon = $place_icon;

        return $this;
    }

    /**
     * Place ID
     *
     * @return integer
     */
    public function getPlaceId()
    {
        return $this->place_id;
    }

    /**
     * @return $this
     *
     * @param integer $place_id
     */
    public function setPlaceId($place_id)
    {
        $this->place_id = $place_id;

        return $this;
    }

    /**
     * Place title
     *
     * @return string
     */
    public function getPlaceTitle()
    {
        return $this->place_title;
    }

    /**
     * @return $this
     *
     * @param string $place_title
     */
    public function setPlaceTitle($place_title)
    {
        $this->place_title = $place_title;

        return $this;
    }

    /**
     * Place type
     *
     * @return string
     */
    public function getPlaceType()
    {
        return $this->place_type;
    }

    /**
     * @return $this
     *
     * @param string $place_type
     */
    public function setPlaceType($place_type)
    {
        $this->place_type = $place_type;

        return $this;
    }

    /**
     * Comment text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * User ID
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }
}
