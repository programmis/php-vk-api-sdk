<?php

namespace VkSdk\Photos;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\CommentXtrPid;

/**
 * Returns a list of comments on a specific photo album or all albums of the user sorted in reverse chronological order.
 * Class PhotosGetAllComments
 * @package VkSdk\Photos
 */
class PhotosGetAllComments extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var CommentXtrPid[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param CommentXtrPid $item
     */
    public function addItem(CommentXtrPid $item)
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
     * Number of comments to return. By default, '20'. Maximum value, '100'.
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
     * @return CommentXtrPid[]
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
        return "photos.getAllComments";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Photos\Includes\CommentXtrPid',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Album ID. If the parameter is not set, comments on all of the user's albums will be returned.
     *
     * @return $this
     *
     * @param integer $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->vkarg_album_id = $album_id;

        return $this;
    }

    /**
     * '1' — to return an additional 'likes' field; '0' — (default)
     *
     * @return $this
     *
     * @param boolean $need_likes
     */
    public function setNeedLikes($need_likes)
    {
        $this->vkarg_need_likes = $need_likes;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of comments. By default, '0'.
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
     * ID of the user or community that owns the album(s).
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
