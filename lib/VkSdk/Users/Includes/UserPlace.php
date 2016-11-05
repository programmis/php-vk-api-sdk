<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 05.11.16
 * Time: 22:56
 */

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;

/**
 * описание места
 *
 * Class UserPlace
 * @package VkSdk\Users\Includes
 */
class UserPlace
{
    use AutoFillObject;

    /** @var int $id */
    private $id;
    /** @var string $title */
    private $title;
    /** @var int $latitude */
    private $latitude;
    /** @var int $longitude */
    private $longitude;
    /** @var int $created */
    private $created;
    /** @var string $icon */
    private $icon;
    /** @var string $country */
    private $country;
    /** @var string $city */
    private $city;

    /**
     * идентификатор места (если назначено);
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return UserPlace
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * название места (если назначено);
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return UserPlace
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * географическая широта;
     *
     * @return int
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param int $latitude
     *
     * @return UserPlace
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * географическая долгота;
     *
     * @return int
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param int $longitude
     *
     * @return UserPlace
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * дата создания (если назначено);
     *
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param int $created
     *
     * @return UserPlace
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * URL изображения-иконки;
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     *
     * @return UserPlace
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * название страны;
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return UserPlace
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * название города;
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return UserPlace
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }
}
