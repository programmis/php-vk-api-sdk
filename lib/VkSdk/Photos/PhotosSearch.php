<?php
namespace VkSdk\Photos;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\Photo;

/**
 * Returns a list of photos.
 * Class PhotosSearch
 *
 * @package VkSdk\Photos
 */
class PhotosSearch extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Photo[]
     */
    public $items;

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
        return "photos.search";
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
     * @return $this
     *
     * @param integer $end_time
     */
    public function setEndTime($end_time)
    {
        $this->vkarg_end_time = $end_time;

        return $this;
    }

    /**
     * Geographical latitude, in degrees (from '-90' to '90').
     *
     * @return $this
     *
     * @param number $lat
     */
    public function setLat(number $lat)
    {
        $this->vkarg_lat = $lat;

        return $this;
    }

    /**
     * Geographical longitude, in degrees (from '-180' to '180').;
     *
     * @return $this
     *
     * @param number $long
     */
    public function setLong(number $long)
    {
        $this->vkarg_long = $long;

        return $this;
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
     * Search query string.
     *
     * @return $this
     *
     * @param string $q
     */
    public function setQ($q)
    {
        $this->vkarg_q = $q;

        return $this;
    }

    /**
     * Radius of search in meters (works very approximately). Available values: '10', '100', '800', '6000', '50000'.
     *
     * @return $this
     *
     * @param integer $radius
     */
    public function setRadius($radius)
    {
        $this->vkarg_radius = $radius;

        return $this;
    }

    /**
     * Sort order:
     *
     * @return $this
     *
     * @param integer $sort
     */
    public function setSort($sort)
    {
        $this->vkarg_sort = $sort;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $start_time
     */
    public function setStartTime($start_time)
    {
        $this->vkarg_start_time = $start_time;

        return $this;
    }
}
