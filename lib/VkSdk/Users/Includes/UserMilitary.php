<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 04.11.16
 * Time: 22:13
 */

namespace VkSdk\Users\Includes;

/**
 * информация о военной службе пользователя
 *
 * Class UserMilitary
 * @package VkSdk\Users\Includes
 */
class UserMilitary
{
    /** @var string $unit\ */
    private $unit;
    /** @var int $unit_id */
    private $unit_id;
    /** @var int $country_id */
    private $country_id;
    /** @var int $from */
    private $from;
    /** @var int $until */
    private $until;

    /**
     * номер части
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     *
     * @return UserMilitary
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * идентификатор части в базе данных;
     *
     * @return int
     */
    public function getUnitId()
    {
        return $this->unit_id;
    }

    /**
     * @param int $unit_id
     *
     * @return UserMilitary
     */
    public function setUnitId($unit_id)
    {
        $this->unit_id = $unit_id;

        return $this;
    }

    /**
     * идентификатор страны, в которой находится часть;
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
     * @return UserMilitary
     */
    public function setCountryId($country_id)
    {
        $this->country_id = $country_id;

        return $this;
    }

    /**
     * год начала службы;
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
     * @return UserMilitary
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * год окончания службы.
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
     * @return UserMilitary
     */
    public function setUntil($until)
    {
        $this->until = $until;

        return $this;
    }
}
