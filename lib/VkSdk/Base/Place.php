<?php
namespace VkSdk\Base;

/**
 * Class Place
 *
 * @package VkSdk\Base
 */
class Place
{

    /**
     * @var string
     */
    public $address;

    /**
     * @var integer
     */
    public $checkins;

    /**
     * @var integer
     */
    public $city;

    /**
     * @var integer
     */
    public $country;

    /**
     * @var integer
     */
    public $created;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var number
     */
    public $latitude;

    /**
     * @var number
     */
    public $longitude;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * Place address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return $this
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Checkins number
     *
     * @return integer
     */
    public function getCheckins()
    {
        return $this->checkins;
    }

    /**
     * @return $this
     *
     * @param integer $checkins
     */
    public function setCheckins($checkins)
    {
        $this->checkins = $checkins;

        return $this;
    }

    /**
     * City ID
     *
     * @return integer
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return $this
     *
     * @param integer $city
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Country ID
     *
     * @return integer
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return $this
     *
     * @param integer $country
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Date of the place creation in Unixtime
     *
     * @return integer
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return $this
     *
     * @param integer $created
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * URL of the place's icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return $this
     *
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
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
     * Place title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Place type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
