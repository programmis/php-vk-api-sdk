<?php

namespace VkSdk\Widgets\Includes;

use lib\AutoFillObject;

/**
 * Class CommentMedia
 * @package VkSdk\Widgets\Includes
 */
class CommentMedia
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $item_id;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var string
     */
    private $thumb_src;

    /**
     * @var string
     */
    private $type;

    /**
     * Media item ID
     *
     * @return integer
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * @return $this
     *
     * @param integer $item_id
     */
    public function setItemId($item_id)
    {
        $this->item_id = $item_id;

        return $this;
    }

    /**
     * Media owner's ID
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
     * URL of the preview image (type=photo only)
     *
     * @return string
     */
    public function getThumbSrc()
    {
        return $this->thumb_src;
    }

    /**
     * @return $this
     *
     * @param string $thumb_src
     */
    public function setThumbSrc($thumb_src)
    {
        $this->thumb_src = $thumb_src;

        return $this;
    }

    /**
     * Media type
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
}
