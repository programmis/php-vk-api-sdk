<?php
namespace VkSdk\Groups\Includes;

/**
 * Class LinksItem
 *
 * @package VkSdk\Groups\Includes
 */
class LinksItem
{

    /**
     * @var string
     */
    public $desc;

    /**
     * @var integer
     */
    public $edit_title;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $name;

    /**
     * @var string
     */
    public $photo_100;

    /**
     * @var string
     */
    public $photo_50;

    /**
     * @var string
     */
    public $url;

    /**
     * Link description
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @return $this
     *
     * @param string $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Information whether the link title can be edited
     *
     * @return integer
     */
    public function getEditTitle()
    {
        return $this->edit_title;
    }

    /**
     * @return $this
     *
     * @param integer $edit_title
     */
    public function setEditTitle($edit_title)
    {
        $this->edit_title = $edit_title;

        return $this;
    }

    /**
     * Link ID
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
     * Link title
     *
     * @return integer
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     *
     * @param integer $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * URL of square image of the link with 100 pixels in width
     *
     * @return string
     */
    public function getPhoto100()
    {
        return $this->photo_100;
    }

    /**
     * @return $this
     *
     * @param string $photo_100
     */
    public function setPhoto100($photo_100)
    {
        $this->photo_100 = $photo_100;

        return $this;
    }

    /**
     * URL of square image of the link with 50 pixels in width
     *
     * @return string
     */
    public function getPhoto50()
    {
        return $this->photo_50;
    }

    /**
     * @return $this
     *
     * @param string $photo_50
     */
    public function setPhoto50($photo_50)
    {
        $this->photo_50 = $photo_50;

        return $this;
    }

    /**
     * Link URL
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
