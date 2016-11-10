<?php
namespace VkSdk\Database;

use lib\AutoFillObject;
use VkSdk\Database\Includes\City;
use VkSdk\Includes\Request;

/**
 * Returns a list of cities.
 * Class DatabaseGetCities
 *
 * @package VkSdk\Database
 */
class DatabaseGetCities extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var City[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param City $item
     */
    public function addItem(City $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["country_id"]);

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
     * Number of cities to return.
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
     * @return City[]
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
        return "database.getCities";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Database\Includes\City',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Country ID.
     *
     * @return $this
     *
     * @param integer $country_id
     */
    public function setCountryId($country_id)
    {
        $this->vkarg_country_id = $country_id;

        return $this;
    }

    /**
     * '1' — to return all cities in the country; '0' — to return major cities in the country (default);
     *
     * @return $this
     *
     * @param boolean $need_all
     */
    public function setNeedAll($need_all)
    {
        $this->vkarg_need_all = $need_all;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of cities.
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
     * Search query.
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
     * Region ID.
     *
     * @return $this
     *
     * @param integer $region_id
     */
    public function setRegionId($region_id)
    {
        $this->vkarg_region_id = $region_id;

        return $this;
    }
}
