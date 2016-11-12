<?php

namespace VkSdk\Groups;

use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;

/**
 * Returns information about communities by their IDs.
 *
 * Class GroupsGetById
 *
 * @package VkSdk\Groups
 */
class GroupsGetById extends Request
{
    /** @var GroupFull[] $groups */
    private $groups = [];

    /**
     * @var array $fields
     */
    private $fields = [];

    /**
     * @var array $group_ids
     */
    private $group_ids = [];

    /**
     * @return GroupFull[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Group fields to return.;
     *
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->fields[] = $field;

        return $this;
    }

    /**
     * IDs or screen names of communities.
     *
     * @return $this
     *
     * @param string $group_id
     */
    public function addGroupId($group_id)
    {
        $this->group_ids[] = $group_id;

        return $this;
    }

    /**
     * result in $this->getGroups();
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setParameter('fields', $this->fields);
        $this->setParameter('group_id', $this->group_ids);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response)
                && is_array($json->response)
            ) {
                foreach ($json->response as $item) {
                    $group = new GroupFull();
                    $group->fillByJson($item);
                    $this->groups[] = $group;
                }

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
     * @inheritdoc
     */
    public function getMethod()
    {
        return "groups.getById";
    }

    /**
     * Group fields to return.;
     *
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * ID or screen name of the community.
     *
     * @return $this
     *
     * @param string $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * IDs or screen names of communities.
     *
     * @return $this
     *
     * @param array $group_ids
     */
    public function setGroupIds(array $group_ids)
    {
        $this->group_ids = $group_ids;

        return $this;
    }
}
