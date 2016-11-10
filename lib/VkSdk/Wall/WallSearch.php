<?php
namespace VkSdk\Wall;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserFull;
use VkSdk\Wall\Includes\WallpostFull;

/**
 * Allows to search posts on user or community walls.
 * Class WallSearch
 *
 * @package VkSdk\Wall
 */
class WallSearch extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

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
     * Total number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * count of posts to return.
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
        return "wall.search";
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
     * user or community screen name.
     *
     * @return $this
     *
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->vkarg_domain = $domain;

        return $this;
    }

    /**
     * show extended post info.
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
     * user or community id. ; "Remember that for a community 'owner_id' must be negative."
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
     * '1' – returns only page owner's posts.
     *
     * @return $this
     *
     * @param boolean $owners_only
     */
    public function setOwnersOnly($owners_only)
    {
        $this->vkarg_owners_only = $owners_only;

        return $this;
    }

    /**
     * search query string.
     *
     * @return $this
     *
     * @param string $query
     */
    public function setQuery($query)
    {
        $this->vkarg_query = $query;

        return $this;
    }
}
