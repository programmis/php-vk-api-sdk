<?php
namespace VkSdk\Docs\Includes;

/**
 * Class Doc
 *
 * @package VkSdk\Docs\Includes
 */
class Doc
{

    /**
     * @var string
     */
    public $access_key;

    /**
     * @var integer
     */
    public $date;

    /**
     * @var string
     */
    public $ext;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $owner_id;

    /**
     * @var object
     */
    public $preview;

    /**
     * @var integer
     */
    public $size;

    /**
     * @var string
     */
    public $title;

    /**
     * @var integer
     */
    public $type;

    /**
     * @var string
     */
    public $url;

    /**
     * Access key for the document
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->access_key;
    }

    /**
     * @return $this
     *
     * @param string $access_key
     */
    public function setAccessKey($access_key)
    {
        $this->access_key = $access_key;

        return $this;
    }

    /**
     * Date when file has been uploaded in Unixtime
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
     * File extension
     *
     * @return string
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * @return $this
     *
     * @param string $ext
     */
    public function setExt($ext)
    {
        $this->ext = $ext;

        return $this;
    }

    /**
     * Document ID
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
     * Document owner ID
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
     * @return object
     */
    public function getPreview()
    {
        return $this->preview;
    }

    /**
     * @return $this
     *
     * @param object $preview
     */
    public function setPreview($preview)
    {
        $this->preview = $preview;

        return $this;
    }

    /**
     * File size in bites
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
     * Document title
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
     * Document type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     *
     * @param integer $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * File URL
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
