<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 03.11.16
 * Time: 23:44
 */

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;

/**
 * информация о карьере пользователя.
 *
 * Class UserCareer
 * @package VkSdk\Users\Includes
 */
class UserCareer
{
    use AutoFillObject;

    /** @var int $group_id */
    private $group_id;
    /** @var string $company */
    private $company;
    /** @var int $country_id */
    private $country_id;
    /** @var int $city_id */
    private $city_id;
    /** @var string $city_name */
    private $city_name;
    /** @var int $from */
    private $from;
    /** @var int $until */
    private $until;
    /** @var string $position */
    private $position;

    /**
     * должность.
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     *
     * @return UserCareer
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * год окончания работы;
     *
     * @return int
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * @param int $until
     *
     * @return UserCareer
     */
    public function setUntil($until)
    {
        $this->until = $until;

        return $this;
    }

    /**
     * год начала работы;
     *
     * @return int
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param int $from
     *
     * @return UserCareer
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * название города (если доступно, иначе city_id);
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->city_name;
    }

    /**
     * @param string $city_name
     *
     * @return UserCareer
     */
    public function setCityName($city_name)
    {
        $this->city_name = $city_name;

        return $this;
    }

    /**
     * идентификатор города (если доступно, иначе city_name);
     *
     * @return int
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * @param int $city_id
     *
     * @return UserCareer
     */
    public function setCityId($city_id)
    {
        $this->city_id = $city_id;

        return $this;
    }

    /**
     * идентификатор страны;
     *
     * @return int
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * @param int $country_id
     *
     * @return UserCareer
     */
    public function setCountryId($country_id)
    {
        $this->country_id = $country_id;

        return $this;
    }

    /**
     * название компании (если доступно, иначе group_id);
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     *
     * @return UserCareer
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * идентификатор сообщества (если доступно, иначе company);
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * @param int $group_id
     *
     * @return UserCareer
     */
    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;

        return $this;
    }
}
