<?php
namespace VkSdk\Newsfeed;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\WallpostToId;

/**
 * Returns a list of posts on user walls in which the current user is mentioned.;
 * Class NewsfeedGetMentions
 *
 * @package VkSdk\Newsfeed
 */
class NewsfeedGetMentions extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var WallpostToId[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param WallpostToId $item
     */
    public function addItem(WallpostToId $item)
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
     * Number of posts to return.
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
     * @return WallpostToId[]
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
        return "newsfeed.getMentions";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Wall\Includes\WallpostToId',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Latest timestamp (in Unix time) of a post to return. By default, the current time.;
     *
     * @return $this
     *
     * @param integer $end_time
     */
    public function setEndTime($end_time)
    {
        $this->vkarg_end_time = $end_time;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of posts.
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
     * Owner ID.
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }

    /**
     * Earliest timestamp (in Unix time) of a post to return. By default, 24 hours ago.;
     *
     * @return $this
     *
     * @param integer $start_time
     */
    public function setStartTime($start_time)
    {
        $this->vkarg_start_time = $start_time;

        return $this;
    }
}
