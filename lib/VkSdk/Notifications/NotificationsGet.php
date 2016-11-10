<?php

namespace VkSdk\Notifications;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\Group;
use VkSdk\Includes\Request;
use VkSdk\Notifications\Includes\Notification;
use VkSdk\Users\Includes\User;

/**
 * Returns a list of notifications about other users' feedback to the current user's wall posts.
 * Class NotificationsGet
 * @package VkSdk\Notifications
 */
class NotificationsGet extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var Group[]
     */
    private $groups;

    /**
     * @var Notification[]
     */
    private $items;

    /**
     * @var integer
     */
    private $last_viewed;

    /**
     * @var User[]
     */
    private $profiles;

    /**
     * Type of notifications to return:; 'wall' — wall posts; 'mentions' — mentions in wall posts, comments, or topics; 'comments' — comments to wall posts, photos, and videos; 'likes'  — likes; 'reposted' — wall posts that are copied from the current user's wall; 'followers' — new followers; 'friends' — accepted friend requests
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
     * @param Group $group
     */
    public function addGroup(Group $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * @return $this
     *
     * @param Notification $item
     */
    public function addItem(Notification $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return $this
     *
     * @param User $profile
     */
    public function addProfile(User $profile)
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
     * Total number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of notifications to return.
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
     * @return Group[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return Notification[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Time when user has been checked notifications last time
     *
     * @return integer
     */
    public function getLastViewed()
    {
        return $this->last_viewed;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "notifications.get";
    }

    /**
     * @return User[]
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
                'class'  => 'VkSdk\Notifications\Includes\Notification',
                'method' => 'addItem'
            ],
            'profiles' => [
                'class'  => 'VkSdk\Users\Includes\User',
                'method' => 'addProfile'
            ],
            'groups'   => [
                'class'  => 'VkSdk\Groups\Includes\Group',
                'method' => 'addGroup'
            ],
        ];
    }

    /**
     * Latest timestamp (in Unix time) of a notification to return. By default, the current time.
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
     * Type of notifications to return:; 'wall' — wall posts; 'mentions' — mentions in wall posts, comments, or topics; 'comments' — comments to wall posts, photos, and videos; 'likes'  — likes; 'reposted' — wall posts that are copied from the current user's wall; 'followers' — new followers; 'friends' — accepted friend requests
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
     * Earliest timestamp (in Unix time) of a notification to return. By default, 24 hours ago.
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
