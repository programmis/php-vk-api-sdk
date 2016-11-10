<?php

namespace VkSdk\Friends;

use lib\AutoFillObject;
use VkSdk\Friends\Includes\Lists;
use VkSdk\Includes\Request;

/**
 * Returns a list of the user's friend lists.
 * Class FriendsGetLists
 * @package VkSdk\Friends
 */
class FriendsGetLists extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var Lists[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param Lists $item
     */
    public function addItem(Lists $item)
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
     * Total communities number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return Lists[]
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
        return "friends.getLists";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Friends\Includes\Lists',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * '1' — to return system friend lists. By default: '0'.
     *
     * @return $this
     *
     * @param boolean $return_system
     */
    public function setReturnSystem($return_system)
    {
        $this->vkarg_return_system = $return_system;

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
