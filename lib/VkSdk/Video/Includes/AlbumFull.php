<?php

namespace VkSdk\Video\Includes;

use lib\AutoFillObject;

/**
 * Class AlbumFull
 * @package VkSdk\Video\Includes
 */
class AlbumFull
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $is_system;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var string
     */
    private $photo_160;

    /**
     * @var string
     */
    private $photo_320;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $updated_time;

    /**
     * Total number of videos in album
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Album ID
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
     * Information whether album is system
     *
     * @return integer
     */
    public function getIsSystem()
    {
        return $this->is_system;
    }

    /**
     * @return $this
     *
     * @param integer $is_system
     */
    public function setIsSystem($is_system)
    {
        $this->is_system = $is_system;

        return $this;
    }

    /**
     * Album owner's ID
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    /**
     * URL of the preview image with 160px in width
     *
     * @return string
     */
    public function getPhoto160()
    {
        return $this->photo_160;
    }

    /**
     * @return $this
     *
     * @param string $photo_160
     */
    public function setPhoto160($photo_160)
    {
        $this->photo_160 = $photo_160;

        return $this;
    }

    /**
     * URL of the preview image with 320px in width
     *
     * @return string
     */
    public function getPhoto320()
    {
        return $this->photo_320;
    }

    /**
     * @return $this
     *
     * @param string $photo_320
     */
    public function setPhoto320($photo_320)
    {
        $this->photo_320 = $photo_320;

        return $this;
    }

    /**
     * Album title
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

    /**
     * Date when the album has been updated last time in Unixtime
     *
     * @return integer
     */
    public function getUpdatedTime()
    {
        return $this->updated_time;
    }

    /**
     * @return $this
     *
     * @param integer $updated_time
     */
    public function setUpdatedTime($updated_time)
    {
        $this->updated_time = $updated_time;

        return $this;
    }
}
