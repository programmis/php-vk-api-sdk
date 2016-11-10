<?php
namespace VkSdk\Board;

use lib\AutoFillObject;
use VkSdk\Board\Includes\Topic;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserMin;

/**
 * Returns a list of topics on a community's discussion board.
 * Class BoardGetTopics
 *
 * @package VkSdk\Board
 */
class BoardGetTopics extends Request
{

    use AutoFillObject;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $can_add_topics;

    /**
     * @var integer
     */
    public $count;

    /**
     * See constants of class DefaultOrder
     *
     * @var integer
     */
    public $default_order;

    /**
     * @var Topic[]
     */
    public $items;

    /**
     * @var UserMin[]
     */
    public $profiles;

    /**
     * @return $this
     *
     * @param Topic $item
     */
    public function addItem(Topic $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return $this
     *
     * @param UserMin $profile
     */
    public function addProfile(UserMin $profile)
    {
        $this->profiles[] = $profile;

        return $this;
    }

    /**
     * IDs of topics to be returned (100 maximum). By default, all topics are returned.; If this parameter is set, the 'order', 'offset', and 'count' parameters are ignored.
     *
     * @return $this
     *
     * @param integer $topic_id
     */
    public function addTopicId($topic_id)
    {
        $this->vkarg_topic_ids[] = $topic_id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id"]);

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
     * Information whether current user can add topic
     *
     * @return integer
     */
    public function getCanAddTopics()
    {
        return $this->can_add_topics;
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
     * Number of topics to return.
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
     * @return integer
     */
    public function getDefaultOrder()
    {
        return $this->default_order;
    }

    /**
     * @return Topic[]
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
        return "board.getTopics";
    }

    /**
     * @return UserMin[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items'    => [
                'class'  => 'VkSdk\Board\Includes\Topic',
                'method' => 'addItem'
            ],
            'profiles' => [
                'class'  => 'VkSdk\Users\Includes\UserMin',
                'method' => 'addProfile'
            ],
        ];
    }

    /**
     * '1' — to return information about users who created topics or who posted there last; '0' — to return no additional fields (default)
     *
     * @return $this
     *
     * @param boolean $extended
     */
    public function setExtended($extended)
    {
        $this->vkarg_extended = $extended;

        return $this;
    }

    /**
     * ID of the community that owns the discussion board.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of topics.
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
     * Sort order:; '1' — by date updated in reverse chronological order.; '2' — by date created in reverse chronological order.; '-1' — by date updated in chronological order.; '-2' — by date created in chronological order.; ; If no sort order is specified, topics are returned in the order specified by the group administrator. Pinned topics are returned first, regardless of the sorting.
     *
     * @return $this
     *
     * @param integer $order
     */
    public function setOrder($order)
    {
        $this->vkarg_order = $order;

        return $this;
    }

    /**
     * '1' — to return the first comment in each topic;; '2' — to return the last comment in each topic;; '0' — to return no comments.; ; By default: '0'.
     *
     * @return $this
     *
     * @param integer $preview
     */
    public function setPreview($preview)
    {
        $this->vkarg_preview = $preview;

        return $this;
    }

    /**
     * Number of characters after which to truncate the previewed comment. To preview the full comment, specify '0'.
     *
     * @return $this
     *
     * @param integer $preview_length
     */
    public function setPreviewLength($preview_length)
    {
        $this->vkarg_preview_length = $preview_length;

        return $this;
    }

    /**
     * IDs of topics to be returned (100 maximum). By default, all topics are returned.; If this parameter is set, the 'order', 'offset', and 'count' parameters are ignored.
     *
     * @return $this
     *
     * @param array $topic_ids
     */
    public function setTopicIds(array $topic_ids)
    {
        $this->vkarg_topic_ids = $topic_ids;

        return $this;
    }
}
