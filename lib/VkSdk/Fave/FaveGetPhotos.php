<?php

namespace VkSdk\Fave;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\Photo;

/**
 * Returns a list of photos that the current user has liked.; ;
 * Class FaveGetPhotos
 * @package VkSdk\Fave
 */
class FaveGetPhotos extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var Photo[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param Photo $item
     */
    public function addItem(Photo $item)
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
     * @return Photo[]
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
        return "fave.getPhotos";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Photos\Includes\Photo',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Offset needed to return a specific subset of photos.
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
     * '1' — to return photo sizes in a .
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
