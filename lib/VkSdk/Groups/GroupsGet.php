<?php

namespace VkSdk\Groups;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;

/**
 * Returns a list of the communities to which a user belongs.; ;
 *
 * Class GroupsGet
 *
 * @package VkSdk\Groups
 */
class GroupsGet extends Request
{
    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var GroupFull[]
     */
    private $items = [];

    /**
     * Profile fields to return.;
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
     * Types of communities to return:; 'admin' — to return communities administered by the user ;
     * 'editor' — to return communities where the user is an administrator or editor;
     * 'moder' — to return communities where the user is an administrator, editor, or moderator;
     * 'groups' — to return only groups; 'publics' — to return only public pages; 'events' — to return only events
     *
     * @return $this
     *
     * @param string $filter
     */
    public function addFilter($filter)
    {
        $this->vkarg_filter[] = $filter;

        return $this;
    }

    /**
     * @return $this
     *
     * @param GroupFull $item
     */
    public function addItem(GroupFull $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * result in $this->getItems(); and $this->getCount();
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->fillByJson($json->response);

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
     * Total communities number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of communities to return.
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
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "groups.get";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Groups\Includes\GroupFull',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * '1' — to return complete information about a user's communities;
     * '0' — to return a list of community IDs without any additional fields (default);
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
     * Profile fields to return.;
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
     * Types of communities to return:; 'admin' — to return communities administered by the user ;
     * 'editor' — to return communities where the user is an administrator or editor;
     * 'moder' — to return communities where the user is an administrator, editor, or moderator;
     * 'groups' — to return only groups; 'publics' — to return only public pages; 'events' — to return only events
     *
     * @return $this
     *
     * @param array $filter
     */
    public function setFilter(array $filter)
    {
        $this->vkarg_filter = $filter;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of communities.
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
