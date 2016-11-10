<?php
namespace VkSdk\Widgets\Includes;

/**
 * Class WidgetPage
 *
 * @package VkSdk\Widgets\Includes
 */
class WidgetPage
{

    /**
     * @var object
     */
    public $comments;

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
    public $id;

    /**
     * @var object
     */
    public $likes;

    /**
     * @var string
     */
    public $page_id;

    /**
     * @var string
     */
    public $photo;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;

    /**
     * @return object
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @return $this
     *
     * @param object $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Date when widgets on the page has been initialized firstly in Unixtime
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
     * Page description
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
     * Page ID
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
     * @return object
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @return $this
     *
     * @param object $likes
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * page_id parameter value
     *
     * @return string
     */
    public function getPageId()
    {
        return $this->page_id;
    }

    /**
     * @return $this
     *
     * @param string $page_id
     */
    public function setPageId($page_id)
    {
        $this->page_id = $page_id;

        return $this;
    }

    /**
     * URL of the preview image
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return $this
     *
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Page title
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
     * Page abcolute URL
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return $this
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
