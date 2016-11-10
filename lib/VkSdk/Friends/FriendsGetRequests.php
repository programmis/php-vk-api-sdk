<?php

namespace VkSdk\Friends;

use lib\AutoFillObject;
use VkSdk\Friends\Includes\RequestsXtrMessage;
use VkSdk\Includes\Request;

/**
 * Returns information about the current user's incoming and outgoing friend requests.
 * Class FriendsGetRequests
 * @package VkSdk\Friends
 */
class FriendsGetRequests extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var RequestsXtrMessage[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param RequestsXtrMessage $item
     */
    public function addItem(RequestsXtrMessage $item)
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
     * Total requests number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of friend requests to return (default 100, maximum 1000).
     *
     * @return $this
     *
*@param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * @return RequestsXtrMessage[]
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
        return "friends.getRequests";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Friends\Includes\RequestsXtrMessage',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * '1' — to return response messages from users who have sent a friend request or, if 'suggested' is set to '1', to return a list of suggested friends
     *
     * @return $this

     *
*@param boolean $extended
     */
    public function setExtended($extended)
    {
        $this->vkarg_extended = $extended;

        return $this;
    }

    /**
     * '1' — to return a list of mutual friends (up to 20), if any
     *
     * @return $this

     *
*@param boolean $need_mutual
     */
    public function setNeedMutual($need_mutual)
    {
        $this->vkarg_need_mutual = $need_mutual;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of friend requests.

     *
*@return $this
     *
*@param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * '1' — to return outgoing requests; '0' — to return incoming requests (default)
     *
     * @return $this

     *
*@param boolean $out
     */
    public function setOut($out)
    {
        $this->vkarg_out = $out;

        return $this;
    }

    /**
     * Sort order:; '1' — by number of mutual friends; '0' — by date
     *
     * @return $this

     *
*@param integer $sort
     */
    public function setSort($sort)
    {
        $this->vkarg_sort = $sort;

        return $this;
    }

    /**
     * '1' — to return a list of suggested friends; '0' — to return friend requests (default)

     *
*@return $this
     *
     * @param boolean $suggested
     */
    public function setSuggested($suggested)
    {
        $this->vkarg_suggested = $suggested;

        return $this;
	}
}
