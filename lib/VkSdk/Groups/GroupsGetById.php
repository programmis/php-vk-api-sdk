<?php
namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Returns information about communities by their IDs.
 * Class GroupsGetById
 *
 * @package VkSdk\Groups
 */
class GroupsGetById extends Request
{

    /**
     * Group fields to return.;
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
     * IDs or screen names of communities.
     *
     * @return $this
     *
     * @param string $group_id
     */
    public function addGroupId($group_id)
    {
        $this->vkarg_group_ids[] = $group_id;

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
        $this->vkarg_fields = $fields;

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
        $this->vkarg_group_ids = $group_ids;

        return $this;
    }
}
