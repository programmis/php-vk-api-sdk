<?php
namespace VkSdk\Newsfeed;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;
use VkSdk\Newsfeed\Includes\Item;
use VkSdk\Users\Includes\UserFull;

/**
 * Returns a list of comments in the current user's newsfeed.
 * Class NewsfeedGetComments
 *
 * @package VkSdk\Newsfeed
 */
class NewsfeedGetComments extends Request
{

    use AutoFillObject;

    /**
     * @var GroupFull[]
     */
    public $groups;

    /**
     * @var Item[]
     */
    public $items;

    /**
     * @var string
     */
    public $next_from;

    /**
     * @var UserFull[]
     */
    public $profiles;

    /**
     * Additional fields of  and  to return.
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
     * Filters to apply:; 'post' — new comments on wall posts; 'photo' — new comments on photos; 'video' — new comments on videos; 'topic' — new comments on discussions; 'note' — new comments on notes;
     *
     * @return $this
     *
     * @param string $filter
     */
    public function addFilter($filter)
    {
        $this->vkarg_filters[] = $filter;

        return $this;
    }

    /**
     * @return $this
     *
     * @param GroupFull $group
     */
    public function addGroup(GroupFull $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * @return $this
     *
     * @param Item $item
     */
    public function addItem(Item $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return $this
     *
     * @param UserFull $profile
     */
    public function addProfile(UserFull $profile)
    {
        $this->profiles[] = $profile;

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
     * @return GroupFull[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return Item[]
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
        return "newsfeed.getComments";
    }

    /**
     * New from value
     *
     * @return string
     */
    public function getNextFrom()
    {
        return $this->next_from;
    }

    /**
     * @return UserFull[]
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
                'class'  => 'VkSdk\Newsfeed\Includes\Item',
                'method' => 'addItem'
            ],
            'profiles' => [
                'class'  => 'VkSdk\Users\Includes\UserFull',
                'method' => 'addProfile'
            ],
            'groups'   => [
                'class'  => 'VkSdk\Groups\Includes\GroupFull',
                'method' => 'addGroup'
            ],
        ];
    }

    /**
     * Number of comments to return. For auto feed, you can use the 'new_offset' parameter returned by this method.
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
     * Latest timestamp (in Unix time) of a comment to return. By default, the current time.
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
     * Additional fields of  and  to return.
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
     * Filters to apply:; 'post' — new comments on wall posts; 'photo' — new comments on photos; 'video' — new comments on videos; 'topic' — new comments on discussions; 'note' — new comments on notes;
     *
     * @return $this
     *
     * @param array $filters
     */
    public function setFilters(array $filters)
    {
        $this->vkarg_filters = $filters;

        return $this;
    }

    /**
     * Object ID, comments on repost of which shall be returned, e.g. 'wall1_45486'. (If the parameter is set, the 'filters' parameter is optional.);
     *
     * @return $this
     *
     * @param string $reposts
     */
    public function setReposts($reposts)
    {
        $this->vkarg_reposts = $reposts;

        return $this;
    }

    /**
     * Identificator needed to return the next oage with results. Value for this parameter returns in 'next_from' field.
     *
     * @return $this
     *
     * @param string $start_from
     */
    public function setStartFrom($start_from)
    {
        $this->vkarg_start_from = $start_from;

        return $this;
    }

    /**
     * Earliest timestamp (in Unix time) of a comment to return. By default, 24 hours ago.
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
