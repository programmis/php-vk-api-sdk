<?php

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;

/**
 * Class Career
 * @package VkSdk\Users\Includes
 */
class Career
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $city_id;

    /**
     * @var integer
     */
    private $country_id;

    /**
     * @var integer
     */
    private $from;

    /**
     * @var integer
     */
    private $group_id;

    /**
     * @var string
     */
    private $position;

    /**
     * @var integer
     */
    private $until;

    /**
     * City ID
     *
     * @return integer
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * @return $this
     *
     * @param integer $city_id
     */
    public function setCityId($city_id)
    {
        $this->city_id = $city_id;

        return $this;
    }

    /**
     * Country ID
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * @return $this
     *
     * @param integer $country_id
     */
    public function setCountryId($country_id)
    {
        $this->country_id = $country_id;

        return $this;
    }

    /**
     * From year
     *
     * @return integer
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return $this
     *
     * @param integer $from
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Community ID
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;

        return $this;
    }

    /**
     * Position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return $this
     *
     * @param string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Till year
     *
     * @return integer
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * @return $this
     *
     * @param integer $until
     */
    public function setUntil($until)
    {
        $this->until = $until;

        return $this;
    }
}
