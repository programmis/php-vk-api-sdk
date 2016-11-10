<?php
namespace VkSdk\Photos;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\PhotoFull;

/**
 * Returns a list of a user's or community's photos.
 * Class PhotosGet
 *
 * @package VkSdk\Photos
 */
class PhotosGet extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var PhotoFull[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param PhotoFull $item
     */
    public function addItem(PhotoFull $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Photo IDs.
     *
     * @return $this
     *
     * @param string $photo_id
     */
    public function addPhotoId($photo_id)
    {
        $this->vkarg_photo_ids[] = $photo_id;

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
     * @return PhotoFull[]
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
        return "photos.get";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Photos\Includes\PhotoFull',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Photo album ID. To return information about photos from service albums, use the following string values: 'profile, wall, saved'.
     *
     * @return $this
     *
     * @param string $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->vkarg_album_id = $album_id;

        return $this;
    }

    /**
     * '1' — to return additional 'likes', 'comments', and 'tags' fields; '0' — (default)
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
     * unixtime, that can be obtained with  method in date field to get all photos uploaded by the user on a specific day, or photos the user has been tagged on. Also, 'uid' parameter of the user the event happened with shall be specified.
     *
     * @return $this
     *
     * @param integer $feed
     */
    public function setFeed($feed)
    {
        $this->vkarg_feed = $feed;

        return $this;
    }

    /**
     * Type of feed obtained in 'feed' field of the method.
     *
     * @return $this
     *
     * @param string $feed_type
     */
    public function setFeedType($feed_type)
    {
        $this->vkarg_feed_type = $feed_type;

        return $this;
    }

    /**
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
     * ID of the user or community that owns the photos. Use a negative value to designate a community ID.
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
     * Photo IDs.
     *
     * @return $this
     *
     * @param array $photo_ids
     */
    public function setPhotoIds(array $photo_ids)
    {
        $this->vkarg_photo_ids = $photo_ids;

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

    /**
     * Sort order:; '1' — reverse chronological; '0' — chronological
     *
     * @return $this
     *
     * @param boolean $rev
     */
    public function setRev($rev)
    {
        $this->vkarg_rev = $rev;

        return $this;
    }
}
