<?php

namespace VkSdk\Database;

use lib\AutoFillObject;
use VkSdk\Base\Objects;
use VkSdk\Includes\Request;

/**
 * Returns list of chairs on a specified faculty.
 * Class DatabaseGetChairs
 * @package VkSdk\Database
 */
class DatabaseGetChairs extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var Objects[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param Objects $item
     */
    public function addItem(Objects $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["faculty_id"]);

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
     * amount of chairs to get
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
     * @return Objects[]
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
        return "database.getChairs";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Base\Objects',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * id of the faculty to get chairs from
     *
     * @return $this
     *
     * @param integer $faculty_id
     */
    public function setFacultyId($faculty_id)
    {
        $this->vkarg_faculty_id = $faculty_id;

        return $this;
    }

    /**
     * offset required to get a certain subset of chairs
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
}
