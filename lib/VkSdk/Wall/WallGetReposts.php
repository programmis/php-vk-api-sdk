<?php

namespace VkSdk\Wall;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\Group;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\User;
use VkSdk\Wall\Includes\WallpostFull;

/**
 * Returns information about reposts of a post on user wall or community wall.
 * Class WallGetReposts
 * @package VkSdk\Wall
 */
class WallGetReposts extends Request
{

    use AutoFillObject;

    /**
     * @var Group[]
     */
    private $groups;

    /**
     * @var WallpostFull[]
     */
    private $items;

    /**
     * @var User[]
     */
    private $profiles;

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
     * @param WallpostFull $item
     */
    public function addItem(WallpostFull $item)
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
     * @return Group[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return WallpostFull[]
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
        return "wall.getReposts";
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
                'class'  => 'VkSdk\Wall\Includes\WallpostFull',
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
     * Number of reposts to return.
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
     * Offset needed to return a specific subset of reposts.
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
     * User ID or community ID. By default, current user ID. Use a negative value to designate a community ID.
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
     * Post ID.
     *
     * @return $this
     *
     * @param integer $post_id
     */
    public function setPostId($post_id)
    {
        $this->vkarg_post_id = $post_id;

        return $this;
    }
}
