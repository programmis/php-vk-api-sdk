<?php
namespace VkSdk\Market;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\Comment;

/**
 * Returns comments list for an item.
 * Class MarketGetComments
 *
 * @package VkSdk\Market
 */
class MarketGetComments extends Request
{

    use AutoFillObject;

    /**
     * 'asc' — from old to new, 'desc' — from new to old)
     */
    const SORT_ASC = 'asc';

    /**
     * 'desc' — from new to old)
     */
    const SORT_DESC = 'desc';

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Comment[]
     */
    public $items;

    /**
     * List of additional profile fields to return. See the [vk.com/dev/fields|details]
     *
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->vkarg_fields[] = $field;

        return $this;
    }

    /**
     * @return $this
     *
     * @param Comment $item
     */
    public function addItem(Comment $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id", "item_id"]);

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
     * @return Comment[]
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
        return "market.getComments";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Wall\Includes\Comment',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * '1' — comments will be returned as numbered objects, in addition lists of 'profiles' and 'groups' objects will be returned.
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
     * List of additional profile fields to return. See the [vk.com/dev/fields|details]
     *
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->vkarg_fields = $fields;

        return $this;
    }

    /**
     * Item ID.
     *
     * @return $this
     *
     * @param integer $item_id
     */
    public function setItemId($item_id)
    {
        $this->vkarg_item_id = $item_id;

        return $this;
    }

    /**
     * '1' — to return likes info.
     *
     * @return $this
     *
     * @param boolean $need_likes
     */
    public function setNeedLikes($need_likes)
    {
        $this->vkarg_need_likes = $need_likes;

        return $this;
    }

    /**
     * ID of an item owner community
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
     * Sort order ('asc' — from old to new, 'desc' — from new to old)
     * see self::SORT_* constants
     *
     * @return $this
     *
     * @param string $sort
     */
    public function setSort($sort)
    {
        $this->vkarg_sort = $sort;

        return $this;
    }

    /**
     * ID of a comment to start a list from (details below).
     *
     * @return $this
     *
     * @param integer $start_comment_id
     */
    public function setStartCommentId($start_comment_id)
    {
        $this->vkarg_start_comment_id = $start_comment_id;

        return $this;
    }
}
