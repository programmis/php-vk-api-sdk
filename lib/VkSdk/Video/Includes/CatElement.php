<?php
namespace VkSdk\Video\Includes;

/**
 * Class CatElement
 *
 * @package VkSdk\Video\Includes
 */
class CatElement
{

    /**
     * @var integer
     */
    public $can_add;

    /**
     * @var integer
     */
    public $can_edit;

    /**
     * @var integer
     */
    public $comments;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var integer
     */
    public $date;

    /**
     * @var string
     */
    public $description;

    /**
     * @var integer
     */
    public $duration;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $is_private;

    /**
     * @var integer
     */
    public $owner_id;

    /**
     * @var string
     */
    public $photo_130;

    /**
     * @var string
     */
    public $photo_160;

    /**
     * @var string
     */
    public $photo_320;

    /**
     * @var string
     */
    public $photo_640;

    /**
     * @var string
     */
    public $photo_800;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var integer
     */
    public $updated_time;

    /**
     * @var integer
     */
    public $views;

    /**
     * Information whether current user can add the video
     *
     * @return integer
     */
    public function getCanAdd()
    {
        return $this->can_add;
    }

    /**
     * @return $this
     *
     * @param integer $can_add
     */
    public function setCanAdd($can_add)
    {
        $this->can_add = $can_add;

        return $this;
    }

    /**
     * Information whether current user can edit the video
     *
     * @return integer
     */
    public function getCanEdit()
    {
        return $this->can_edit;
    }

    /**
     * @return $this
     *
     * @param integer $can_edit
     */
    public function setCanEdit($can_edit)
    {
        $this->can_edit = $can_edit;

        return $this;
    }

    /**
     * Comments number
     *
     * @return integer
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @return $this
     *
     * @param integer $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Videos number (for album)
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
     * Date when the element has been created
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return $this
     *
     * @param integer $date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Element description
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
     * Duration in seconds
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return $this
     *
     * @param integer $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Element ID
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
     * Information whether the video is private
     *
     * @return integer
     */
    public function getIsPrivate()
    {
        return $this->is_private;
    }

    /**
     * @return $this
     *
     * @param integer $is_private
     */
    public function setIsPrivate($is_private)
    {
        $this->is_private = $is_private;

        return $this;
    }

    /**
     * Element owner's ID
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
     * URL of the preview image with 160 px in width
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
     * URL of the preview image with 320 px in width
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
     * URL of the preview image with 640 px in width
     *
     * @return string
     */
    public function getPhoto640()
    {
        return $this->photo_640;
    }

    /**
     * @return $this
     *
     * @param string $photo_640
     */
    public function setPhoto640($photo_640)
    {
        $this->photo_640 = $photo_640;

        return $this;
    }

    /**
     * URL of the preview image with 800 px in width
     *
     * @return string
     */
    public function getPhoto800()
    {
        return $this->photo_800;
    }

    /**
     * @return $this
     *
     * @param string $photo_800
     */
    public function setPhoto800($photo_800)
    {
        $this->photo_800 = $photo_800;

        return $this;
    }

    /**
     * Element title
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
     * Element type
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
     * Date of last update (for album) in Unixtime
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
     * Views number
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @return $this
     *
     * @param integer $views
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }
}
