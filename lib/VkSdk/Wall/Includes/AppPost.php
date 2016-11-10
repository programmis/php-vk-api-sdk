<?php

namespace VkSdk\Wall\Includes;

use lib\AutoFillObject;

/**
 * Class AppPost
 * @package VkSdk\Wall\Includes
 */
class AppPost
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $photo_130;

    /**
     * @var string
     */
    private $photo_604;

    /**
     * Application ID
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
     * Application name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * URL of the preview image with 130 px in width
     *
     * @return string
     */
    public function getPhoto130()
    {
        return $this->photo_130;
    }

    /**
     * @return $this
     *
     * @param string $photo_130
     */
    public function setPhoto130($photo_130)
    {
        $this->photo_130 = $photo_130;

        return $this;
    }

    /**
     * URL of the preview image with 604 px in width
     *
     * @return string
     */
    public function getPhoto604()
    {
        return $this->photo_604;
    }

    /**
     * @return $this
     *
     * @param string $photo_604
     */
    public function setPhoto604($photo_604)
    {
        $this->photo_604 = $photo_604;

        return $this;
    }
}
