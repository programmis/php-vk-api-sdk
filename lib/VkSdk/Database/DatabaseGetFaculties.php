<?php
namespace VkSdk\Database;

use lib\AutoFillObject;
use VkSdk\Database\Includes\Faculty;
use VkSdk\Includes\Request;

/**
 * Returns a list of faculties (i.e., university departments).;
 * Class DatabaseGetFaculties
 *
 * @package VkSdk\Database
 */
class DatabaseGetFaculties extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Faculty[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param Faculty $item
     */
    public function addItem(Faculty $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["university_id"]);

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
     * Number of faculties to return.
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
     * @return Faculty[]
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
        return "database.getFaculties";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Database\Includes\Faculty',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Offset needed to return a specific subset of faculties.
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
     * University ID.
     *
     * @return $this
     *
     * @param integer $university_id
     */
    public function setUniversityId($university_id)
    {
        $this->vkarg_university_id = $university_id;

        return $this;
    }
}
