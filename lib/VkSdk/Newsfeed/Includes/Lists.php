<?php

namespace VkSdk\Newsfeed\Includes;

use lib\AutoFillObject;

/**
 * Class Lists
 * @package VkSdk\Newsfeed\Includes
 */
class Lists
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $id;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $no_reposts;

    /**
     * @var array
     */
    private $source_ids;

    /**
     * @var string
     */
    private $title;

    /**
     * List ID
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
     * Information whether reposts hiding is enabled
     *
     * @return integer
     */
    public function getNoReposts()
    {
        return $this->no_reposts;
    }

    /**
     * @return $this
     *
     * @param integer $no_reposts
     */
    public function setNoReposts($no_reposts)
    {
        $this->no_reposts = $no_reposts;

        return $this;
    }

    /**
     * @return array
     */
    public function getSourceIds()
    {
        return $this->source_ids;
    }

    /**
     * @return $this
     *
     * @param array $source_ids
     */
    public function setSourceIds(array $source_ids)
    {
        $this->source_ids = $source_ids;

        return $this;
    }

    /**
     * List title
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
}
