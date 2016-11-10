<?php
namespace VkSdk\Wall;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserFull;
use VkSdk\Wall\Includes\WallpostFull;

/**
 * Returns a list of posts from user or community walls by their IDs.
 * Class WallGetById
 *
 * @package VkSdk\Wall
 */
class WallGetById extends Request
{

    use AutoFillObject;

    /**
     * @var GroupFull[]
     */
    public $groups;

    /**
     * @var WallpostFull[]
     */
    public $items;

    /**
     * @var UserFull[]
     */
    public $profiles;

    /**
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
     * @param WallpostFull $item
     */
    public function addItem(WallpostFull $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * User or community IDs and post IDs, separated by underscores.  Use a negative value to designate a community ID.  Example:; "93388_21539,93388_20904,2943_4276,-1_1"
     *
     * @return $this
     *
     * @param string $post
     */
    public function addPost($post)
    {
        $this->vkarg_posts[] = $post;

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
        $this->setRequiredParams(["posts"]);

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
        return "wall.getById";
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
                'class'  => 'VkSdk\Wall\Includes\WallpostFull',
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
     * Sets the number of parent elements to include in the array 'copy_history' that is returned if the post is a repost from another wall.
     *
     * @return $this
     *
     * @param integer $copy_history_depth
     */
    public function setCopyHistoryDepth($copy_history_depth)
    {
        $this->vkarg_copy_history_depth = $copy_history_depth;

        return $this;
    }

    /**
     * '1' — to return user and community objects needed to display posts; '0' — no additional fields are returned (default)
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
     * User or community IDs and post IDs, separated by underscores.  Use a negative value to designate a community ID.  Example:; "93388_21539,93388_20904,2943_4276,-1_1"
     *
     * @return $this
     *
     * @param array $posts
     */
    public function setPosts(array $posts)
    {
        $this->vkarg_posts = $posts;

        return $this;
    }
}
