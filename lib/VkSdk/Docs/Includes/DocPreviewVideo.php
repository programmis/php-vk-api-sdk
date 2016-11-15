<?php

namespace VkSdk\Docs\Includes;

/**
 * Class DocPreviewVideo
 * @package VkSdk\Docs\Includes
 */
class DocPreviewVideo
{
    /**
     * @var integer
     */
    public $filesize;

    /**
     * @var integer
     */
    public $height;

    /**
     * @var string
     */
    public $src;

    /**
     * @var integer
     */
    public $width;

    /**
     * Video file size in bites
     * @return integer
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Video's height in pixels
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Video URL
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Video's width in pixels
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return $this
     *
     * @param integer $filesize
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;

        return $this;
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
