<?php
namespace VkSdk\Groups\Includes;

/**
 * Class GroupLink
 *
 * @package VkSdk\Groups\Includes
 */
class GroupLink
{

    /**
     * @var string
     */
    public $desc;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $edit_title;

    /**
     * @var integer
     */
    public $id;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $image_processing;

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
     * Information whether the title can be edited
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
     * Information whether the image on processing
     *
     * @return integer
     */
    public function getImageProcessing()
    {
        return $this->image_processing;
    }

    /**
     * @return $this
     *
     * @param integer $image_processing
     */
    public function setImageProcessing($image_processing)
    {
        $this->image_processing = $image_processing;

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
