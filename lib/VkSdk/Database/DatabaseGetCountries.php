<?php
namespace VkSdk\Database;

use lib\AutoFillObject;
use VkSdk\Base\Country;
use VkSdk\Includes\Request;

/**
 * Returns a list of countries.
 * Class DatabaseGetCountries
 *
 * @package VkSdk\Database
 */
class DatabaseGetCountries extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Country[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param Country $item
     */
    public function addItem(Country $item)
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
     * Number of countries to return.
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
     * @return Country[]
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
        return "database.getCountries";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Base\Country',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Country codes in  standard.
     *
     * @return $this
     *
     * @param string $code
     */
    public function setCode($code)
    {
        $this->vkarg_code = $code;

        return $this;
    }

    /**
     * '1' — to return a full list of all countries; '0' — to return a list of countries near the current user's country (default).;
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
     * Offset needed to return a specific subset of countries.
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
