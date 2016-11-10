<?php

namespace VkSdk\Wall\Includes;

use lib\AutoFillObject;

/**
 * Class AttachedNote
 * @package VkSdk\Wall\Includes
 */
class AttachedNote
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $comments;

    /**
     * @var integer
     */
    private $date;

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
    private $read_comments;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $view_url;

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
     * Date when the note has been created in Unixtime
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
     * Note ID
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
     * Note owner's ID
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
     * Read comments number
     *
     * @return integer
     */
    public function getReadComments()
    {
        return $this->read_comments;
    }

    /**
     * @return $this
     *
     * @param integer $read_comments
     */
    public function setReadComments($read_comments)
    {
        $this->read_comments = $read_comments;

        return $this;
    }

    /**
     * Note title
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
     * URL of the page with note preview
     *
     * @return string
     */
    public function getViewUrl()
    {
        return $this->view_url;
    }

    /**
     * @return $this
     *
     * @param string $view_url
     */
    public function setViewUrl($view_url)
    {
        $this->view_url = $view_url;

        return $this;
    }
}
