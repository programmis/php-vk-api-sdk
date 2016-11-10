<?php
namespace VkSdk\Video;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Video\Includes\AlbumFull;

/**
 * Returns a list of video albums owned by a user or community.
 * Class VideoGetAlbums
 *
 * @package VkSdk\Video
 */
class VideoGetAlbums extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var AlbumFull[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param AlbumFull $item
     */
    public function addItem(AlbumFull $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * Total number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of video albums to return.
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * @return AlbumFull[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "video.getAlbums";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Video\Includes\AlbumFull',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * '1' — to return additional information about album privacy settings for the current user
     *
     * @return $this
     *
     * @param boolean $extended
     */
    public function setExtended($extended)
    {
        $this->vkarg_extended = $extended;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of video albums.
     *
     * @return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * ID of the user or community that owns the video album(s).
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }
}
