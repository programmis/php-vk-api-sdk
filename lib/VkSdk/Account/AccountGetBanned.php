<?php

namespace VkSdk\Account;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserMin;

/**
 * Returns a user's blacklist.
 * Class AccountGetBanned
 * @package VkSdk\Account
 */
class AccountGetBanned extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var UserMin[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param UserMin $item
     */
    public function addItem(UserMin $item)
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
     * Number of results to return.
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
     * @return UserMin[]
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
        return "account.getBanned";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Users\Includes\UserMin',
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
}
