<?php
namespace VkSdk\Base;

/**
 * Class Sticker
 *
 * @package VkSdk\Base
 */
class Sticker
{

    /**
     * @var integer
     */
    public $height;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $photo_128;

    /**
     * @var string
     */
    public $photo_256;

    /**
     * @var string
     */
    public $photo_352;

    /**
     * @var string
     */
    public $photo_64;

    /**
     * @var integer
     */
    public $product_id;

    /**
     * @var integer
     */
    public $width;

    /**
     * Hieght in px
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
     * Sticker ID
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
     * URL of the preview image with 128 px in height
     *
     * @return string
     */
    public function getPhoto128()
    {
        return $this->photo_128;
    }

    /**
     * @return $this
     *
     * @param string $photo_128
     */
    public function setPhoto128($photo_128)
    {
        $this->photo_128 = $photo_128;

        return $this;
    }

    /**
     * URL of the preview image with 256 px in height
     *
     * @return string
     */
    public function getPhoto256()
    {
        return $this->photo_256;
    }

    /**
     * @return $this
     *
     * @param string $photo_256
     */
    public function setPhoto256($photo_256)
    {
        $this->photo_256 = $photo_256;

        return $this;
    }

    /**
     * URL of the preview image with 352 px in height
     *
     * @return string
     */
    public function getPhoto352()
    {
        return $this->photo_352;
    }

    /**
     * @return $this
     *
     * @param string $photo_352
     */
    public function setPhoto352($photo_352)
    {
        $this->photo_352 = $photo_352;

        return $this;
    }

    /**
     * URL of the preview image with 64 px in height
     *
     * @return string
     */
    public function getPhoto64()
    {
        return $this->photo_64;
    }

    /**
     * @return $this
     *
     * @param string $photo_64
     */
    public function setPhoto64($photo_64)
    {
        $this->photo_64 = $photo_64;

        return $this;
    }

    /**
     * Collection ID
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @return $this
     *
     * @param integer $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;

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
