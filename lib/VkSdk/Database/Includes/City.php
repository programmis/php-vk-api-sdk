<?php

namespace VkSdk\Database\Includes;

use lib\AutoFillObject;

/**
 * Class City
 * @package VkSdk\Database\Includes
 */
class City
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $area;

    /**
     * @var integer
     */
    private $id;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $important;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $title;

    /**
     * Area title
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @return $this
     *
     * @param string $area
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Object ID
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
     * Information whether the city is included in important cities list
     *
     * @return integer
     */
    public function getImportant()
    {
        return $this->important;
    }

    /**
     * @return $this
     *
     * @param integer $important
     */
    public function setImportant($important)
    {
        $this->important = $important;

        return $this;
    }

    /**
     * Region title
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @return $this
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Object title
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
}
