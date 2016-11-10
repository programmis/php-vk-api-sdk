<?php
namespace VkSdk\Gifts;

use lib\AutoFillObject;
use VkSdk\Gifts\Includes\Gift;
use VkSdk\Includes\Request;

/**
 * Returns a list of user gifts.
 * Class GiftsGet
 *
 * @package VkSdk\Gifts
 */
class GiftsGet extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Gift[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param Gift $item
     */
    public function addItem(Gift $item)
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
     * Number of gifts to return.
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
     * @return Gift[]
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
        return "gifts.get";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Gifts\Includes\Gift',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Offset needed to return a specific subset of results.
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
     * User ID.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
