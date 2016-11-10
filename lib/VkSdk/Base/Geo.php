<?php
namespace VkSdk\Base;

use lib\AutoFillObject;

/**
 * Class Geo
 *
 * @package VkSdk\Base
 */
class Geo
{

    use AutoFillObject;

    /**
     * @var string
     */
    public $coordinates;

    /**
     * @var Place
     */
    public $place;

    /**
     * @var integer
     */
    public $showmap;

    /**
     * @var string
     */
    public $type;

    /**
     * String with coordinates
     *
     * @return string
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @return $this
     *
     * @param string $coordinates
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * @return Place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @return $this
     *
     * @param Place $place
     */
    public function setPlace(Place $place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Information whether a map is showed
     *
     * @return integer
     */
    public function getShowmap()
    {
        return $this->showmap;
    }

    /**
     * @return $this
     *
     * @param integer $showmap
     */
    public function setShowmap($showmap)
    {
        $this->showmap = $showmap;

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

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'place' => 'VkSdk\Base\Place',
        ];
    }
}
