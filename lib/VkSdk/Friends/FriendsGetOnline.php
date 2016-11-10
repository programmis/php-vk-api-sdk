<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Returns a list of user IDs of a user's friends who are online.
 * Class FriendsGetOnline
 * @package VkSdk\Friends
 */
class FriendsGetOnline extends Request
{

    /**
     * @var array
     */
    private $online;

    /**
     * @var array
     */
    private $online_mobile;

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
     * @inheritdoc
     */
    public function getMethod()
    {
        return "friends.getOnline";
    }

    /**
     * User ID
     *
     * @return array
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * User ID
     *
     * @return array
     */
    public function getOnlineMobile()
    {
        return $this->online_mobile;
    }

    /**
     * '1' — to return an additional 'online_mobile' field; '0' — (default);
     *
     * @return $this
     *
     * @param boolean $online_mobile
     */
    public function setOnlineMobile($online_mobile)
    {
        $this->vkarg_online_mobile = $online_mobile;

        return $this;
    }

    /**
     * Number of friends to return.
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
     * Friend list ID. If this parameter is not set, information about all online friends is returned.
     *
     * @return $this
     *
     * @param integer $list_id
     */
    public function setListId($list_id)
    {
        $this->vkarg_list_id = $list_id;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of friends.
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
     * Sort order:; 'random' — random order
     *
     * @return $this
     *
     * @param string $order
     */
    public function setOrder($order)
    {
        $this->vkarg_order = $order;

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
