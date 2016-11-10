<?php

namespace VkSdk\Market\Includes;

use lib\AutoFillObject;
use VkSdk\Photos\Includes\Photo;

/**
 * Class Album
 * @package VkSdk\Market\Includes
 */
class Album
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
    private $owner_id;

    /**
     * @var Photo
     */
    private $photo;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $updated_time;

    /**
     * Items number
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
     * Market album ID
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
     * Market album owner's ID
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
     * @return Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return $this
     *
     * @param Photo $photo
     */
    public function setPhoto(Photo $photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Market album title
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
     * Date when album has been updated last time in Unixtime
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

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'photo' => 'VkSdk\Photos\Includes\Photo',
        ];
    }
}
