<?php
namespace VkSdk\Notes\Includes;

/**
 * Class Note
 *
 * @package VkSdk\Notes\Includes
 */
class Note
{

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $can_comment;

    /**
     * @var integer
     */
    public $comments;

    /**
     * @var integer
     */
    public $date;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $owner_id;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $text_wiki;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $view_url;

    /**
     * Information whether current user can comment the note
     *
     * @return integer
     */
    public function getCanComment()
    {
        return $this->can_comment;
    }

    /**
     * @return $this
     *
     * @param integer $can_comment
     */
    public function setCanComment($can_comment)
    {
        $this->can_comment = $can_comment;

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
     * Note text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Note text in wiki format
     *
     * @return string
     */
    public function getTextWiki()
    {
        return $this->text_wiki;
    }

    /**
     * @return $this
     *
     * @param string $text_wiki
     */
    public function setTextWiki($text_wiki)
    {
        $this->text_wiki = $text_wiki;

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
