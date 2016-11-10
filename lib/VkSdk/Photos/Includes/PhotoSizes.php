<?php

namespace VkSdk\Photos\Includes;

use lib\AutoFillObject;

/**
 * Class PhotoSizes
 * @package VkSdk\Photos\Includes
 */
class PhotoSizes
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var string
     */
    private $src;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $width;

    /**
     * Height in px
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return $this
     *
     * @param integer $height
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * URL of the image
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * @return $this
     *
     * @param string $src
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Size type
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
     * Width in px
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return $this
     *
     * @param integer $width
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }
}
