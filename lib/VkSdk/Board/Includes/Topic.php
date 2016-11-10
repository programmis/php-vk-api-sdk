<?php

namespace VkSdk\Board\Includes;

use lib\AutoFillObject;

/**
 * Class Topic
 * @package VkSdk\Board\Includes
 */
class Topic
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $comments;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $created_by;

    /**
     * @var integer
     */
    private $id;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $is_closed;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $is_fixed;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $updated;

    /**
     * @var integer
     */
    private $updated_by;

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
     * Date when the topic has been created in Unixtime
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
     * Creator ID
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * @return $this
     *
     * @param integer $created_by
     */
    public function setCreatedBy($created_by)
    {
        $this->created_by = $created_by;

        return $this;
    }

    /**
     * Topic ID
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
     * Information whether the topic is closed
     *
     * @return integer
     */
    public function getIsClosed()
    {
        return $this->is_closed;
    }

    /**
     * @return $this
     *
     * @param integer $is_closed
     */
    public function setIsClosed($is_closed)
    {
        $this->is_closed = $is_closed;

        return $this;
    }

    /**
     * Information whether the topic is fixed
     *
     * @return integer
     */
    public function getIsFixed()
    {
        return $this->is_fixed;
    }

    /**
     * @return $this
     *
     * @param integer $is_fixed
     */
    public function setIsFixed($is_fixed)
    {
        $this->is_fixed = $is_fixed;

        return $this;
    }

    /**
     * Topic title
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
     * Date when the topic has been updated in Unixtime
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
     * ID of user who updated the topic
     *
     * @return integer
     */
    public function getUpdatedBy()
    {
        return $this->updated_by;
    }

    /**
     * @return $this
     *
     * @param integer $updated_by
     */
    public function setUpdatedBy($updated_by)
    {
        $this->updated_by = $updated_by;

        return $this;
    }
}
