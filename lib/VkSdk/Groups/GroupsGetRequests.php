<?php

namespace VkSdk\Groups;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserFull;

/**
 * Returns a list of requests to the community.
 *
 * Class GroupsGetRequests
 * @package VkSdk\Groups
 */
class GroupsGetRequests extends Request
{
    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var UserFull[]
     */
    private $items;

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
     * @return $this
     *
     * @param UserFull $item
     */
    public function addItem(UserFull $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * result in $this->getCount(); and $this->getItems();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id"]);

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
     * @return UserFull[]
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
        return "groups.getRequests";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Users\Includes\UserFull',
                'method' => 'addItem'
            ],
        ];
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
     * Community ID.
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
     * Offset needed to return a specific subset of results.
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
}
