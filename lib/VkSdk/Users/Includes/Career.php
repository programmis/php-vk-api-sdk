<?php
namespace VkSdk\Users\Includes;

/**
 * Class Career
 *
 * @package VkSdk\Users\Includes
 */
class Career
{

    /**
     * @var integer
     */
    public $city_id;

    /**
     * @var integer
     */
    public $country_id;

    /**
     * @var integer
     */
    public $from;

    /**
     * @var integer
     */
    public $group_id;

    /**
     * @var string
     */
    public $position;

    /**
     * @var integer
     */
    public $until;

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
