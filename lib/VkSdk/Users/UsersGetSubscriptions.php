<?php
namespace VkSdk\Users;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\Arrays;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\Items;

/**
 * Returns a list of IDs of users and communities followed by the user.
 * Class UsersGetSubscriptions
 *
 * @package VkSdk\Users
 */
class UsersGetSubscriptions extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Arrays
     */
    public $groups;

    /**
     * @var Items[]
     */
    public $items;

    /**
     * @var Arrays
     */
    public $users;

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
     * Total number of available results
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of users and communities to return.
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
     * @return Arrays
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return Items[]
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
        return "users.getSubscriptions";
    }

    /**
     * @return Arrays
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'users'  => 'VkSdk\Users\Includes\Arrays',
            'groups' => 'VkSdk\Groups\Includes\Arrays',
            'items'  => 'VkSdk\Users\Includes\Items',
        ];
    }

    /**
     * '1' — to return a combined list of users and communities; '0' — to return separate lists of users and communities (default)
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
     * Offset needed to return a specific subset of subscriptions.
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
