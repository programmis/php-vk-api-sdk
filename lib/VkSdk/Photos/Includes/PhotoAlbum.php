<?php

namespace VkSdk\Photos\Includes;

use lib\AutoFillObject;

/**
 * Class PhotoAlbum
 * @package VkSdk\Photos\Includes
 */
class PhotoAlbum
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var integer
     */
    private $size;

    /**
     * @var Photo
     */
    private $thumb;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $updated;

    /**
     * Date when the album has been created in Unixtime
     *
     * @return integer
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return $this
     *
     * @param integer $created
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Photo album description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return $this
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Photo album ID
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
     * Photos number
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return $this
     *
     * @param integer $size
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return Photo
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * @return $this
     *
     * @param Photo $thumb
     */
    public function setThumb(Photo $thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Photo album title
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
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @return $this
     *
     * @param integer $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'thumb' => 'VkSdk\Photos\Includes\Photo',
        ];
    }
}
