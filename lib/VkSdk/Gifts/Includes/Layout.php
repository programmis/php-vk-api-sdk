<?php
namespace VkSdk\Gifts\Includes;

/**
 * Class Layout
 *
 * @package VkSdk\Gifts\Includes
 */
class Layout
{

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $thumb_256;

    /**
     * @var string
     */
    public $thumb_48;

    /**
     * @var string
     */
    public $thumb_96;

    /**
     * Gift ID
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
     * URL of the preview image with 256 px in width
     *
     * @return string
     */
    public function getThumb256()
    {
        return $this->thumb_256;
    }

    /**
     * @return $this
     *
     * @param string $thumb_256
     */
    public function setThumb256($thumb_256)
    {
        $this->thumb_256 = $thumb_256;

        return $this;
    }

    /**
     * URL of the preview image with 48 px in width
     *
     * @return string
     */
    public function getThumb48()
    {
        return $this->thumb_48;
    }

    /**
     * @return $this
     *
     * @param string $thumb_48
     */
    public function setThumb48($thumb_48)
    {
        $this->thumb_48 = $thumb_48;

        return $this;
    }

    /**
     * URL of the preview image with 96 px in width
     *
     * @return string
     */
    public function getThumb96()
    {
        return $this->thumb_96;
    }

    /**
     * @return $this
     *
     * @param string $thumb_96
     */
    public function setThumb96($thumb_96)
    {
        $this->thumb_96 = $thumb_96;

        return $this;
    }
}
