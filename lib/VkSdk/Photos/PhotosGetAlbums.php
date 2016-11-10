<?php

namespace VkSdk\Photos;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\PhotoAlbumFull;

/**
 * Returns a list of a user's or community's photo albums.
 * Class PhotosGetAlbums
 * @package VkSdk\Photos
 */
class PhotosGetAlbums extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var PhotoAlbumFull[]
     */
    private $items;

    /**
     * Album IDs.
     *
     * @return $this
     *
     * @param integer $album_id
     */
    public function addAlbumId($album_id)
    {
        $this->vkarg_album_ids[] = $album_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param PhotoAlbumFull $item
     */
    public function addItem(PhotoAlbumFull $item)
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
     * Number of albums to return.
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
     * @return PhotoAlbumFull[]
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
        return "photos.getAlbums";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Photos\Includes\PhotoAlbumFull',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Album IDs.
     *
     * @return $this
     *
     * @param array $album_ids
     */
    public function setAlbumIds(array $album_ids)
    {
        $this->vkarg_album_ids = $album_ids;

        return $this;
    }

    /**
     * '1' — to return an additional 'thumb_src' field; '0' — (default)
     *
     * @return $this
     *
     * @param boolean $need_covers
     */
    public function setNeedCovers($need_covers)
    {
        $this->vkarg_need_covers = $need_covers;

        return $this;
    }

    /**
     * '1' — to return system albums with negative IDs
     *
     * @return $this
     *
     * @param boolean $need_system
     */
    public function setNeedSystem($need_system)
    {
        $this->vkarg_need_system = $need_system;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of albums.
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
     * ID of the user or community that owns the albums.
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

    /**
     * '1' — to return photo sizes in a
     *
     * @return $this
     *
     * @param boolean $photo_sizes
     */
    public function setPhotoSizes($photo_sizes)
    {
        $this->vkarg_photo_sizes = $photo_sizes;

        return $this;
    }
}
