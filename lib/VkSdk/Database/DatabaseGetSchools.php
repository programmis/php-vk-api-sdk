<?php

namespace VkSdk\Database;

use lib\AutoFillObject;
use VkSdk\Database\Includes\School;
use VkSdk\Includes\Request;

/**
 * Returns a list of schools.
 * Class DatabaseGetSchools
 * @package VkSdk\Database
 */
class DatabaseGetSchools extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var School[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param School $item
     */
    public function addItem(School $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["city_id"]);

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
     * Number of schools to return.
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
     * @return School[]
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
        return "database.getSchools";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Database\Includes\School',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * City ID.
     *
     * @return $this
     *
     * @param integer $city_id
     */
    public function setCityId($city_id)
    {
        $this->vkarg_city_id = $city_id;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of schools.
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
}
