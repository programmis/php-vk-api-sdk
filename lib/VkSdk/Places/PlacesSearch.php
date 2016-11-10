<?php
namespace VkSdk\Places;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Places\Includes\PlaceFull;

/**
 * Returns a list of locations that match the search criteria.
 * Class PlacesSearch
 *
 * @package VkSdk\Places
 */
class PlacesSearch extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var PlaceFull[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param PlaceFull $item
     */
    public function addItem(PlaceFull $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["latitude", "longitude"]);

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
     * Number of locations to return.
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
     * @return PlaceFull[]
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
        return "places.search";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Places\Includes\PlaceFull',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * City ID.
     *
     * @return $this
     *
     * @param integer $city
     */
    public function setCity($city)
    {
        $this->vkarg_city = $city;

        return $this;
    }

    /**
     * Geographical latitude of the initial search point, in degrees (from '-90' to '90').
     *
     * @return $this
     *
     * @param number $latitude
     */
    public function setLatitude(number $latitude)
    {
        $this->vkarg_latitude = $latitude;

        return $this;
    }

    /**
     * Geographical longitude of the initial search point, in degrees (from '-180' to '180').
     *
     * @return $this
     *
     * @param number $longitude
     */
    public function setLongitude(number $longitude)
    {
        $this->vkarg_longitude = $longitude;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of locations.
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
     * Radius of the search zone:; '1' — 100 m. (default); '2' — 800 m.; '3' — 6 km.; '4' — 50 km.
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
}
