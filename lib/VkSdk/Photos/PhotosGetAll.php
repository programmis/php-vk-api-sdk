<?php

namespace VkSdk\Photos;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\PhotoFullXtrRealOffset;

/**
 * Returns a list of photos belonging to a user or community, in reverse chronological order.
 * Class PhotosGetAll
 * @package VkSdk\Photos
 */
class PhotosGetAll extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var PhotoFullXtrRealOffset[]
     */
    private $items;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $more;

    /**
     * @return $this
     *
     * @param PhotoFullXtrRealOffset $item
     */
    public function addItem(PhotoFullXtrRealOffset $item)
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
     * Number of photos to return.
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
     * @return PhotoFullXtrRealOffset[]
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
        return "photos.getAll";
    }

    /**
     * Information whether next page is presented
     *
     * @return integer
     */
    public function getMore()
    {
        return $this->more;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Photos\Includes\PhotoFullXtrRealOffset',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * '1' — to return detailed information about photos
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
     * '1' – to show information about photos being hidden from the block above the wall.
     *
     * @return $this
     *
     * @param boolean $need_hidden
     */
    public function setNeedHidden($need_hidden)
    {
        $this->vkarg_need_hidden = $need_hidden;

        return $this;
    }

    /**
     * '1' – to return photos only from standard albums; '0' – to return all photos including those in service albums, e.g., 'My wall photos' (default)
     *
     * @return $this
     *
     * @param boolean $no_service_albums
     */
    public function setNoServiceAlbums($no_service_albums)
    {
        $this->vkarg_no_service_albums = $no_service_albums;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of photos. By default, '0'.
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
     * ID of a user or community that owns the photos.; Use a negative value to designate a community ID.
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
     * '1' – to return image sizes in .
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
     * '1' – not to return photos being hidden from the block above the wall. Works only with owner_id>0, no_service_albums is ignored.
     *
     * @return $this
     *
     * @param boolean $skip_hidden
     */
    public function setSkipHidden($skip_hidden)
    {
        $this->vkarg_skip_hidden = $skip_hidden;

        return $this;
    }
}
