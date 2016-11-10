<?php

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;

/**
 * Class Military
 * @package VkSdk\Users\Includes
 */
class Military
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $country_id;

    /**
     * @var integer
     */
    private $from;

    /**
     * @var string
     */
    private $unit;

    /**
     * @var integer
     */
    private $unit_id;

    /**
     * @var integer
     */
    private $until;

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
     * Unit name
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @return $this
     *
     * @param string $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Unit ID
     *
     * @return integer
     */
    public function getUnitId()
    {
        return $this->unit_id;
    }

    /**
     * @return $this
     *
     * @param integer $unit_id
     */
    public function setUnitId($unit_id)
    {
        $this->unit_id = $unit_id;

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
