<?php

namespace VkSdk\Groups;

use VkSdk\Includes\Request;

class GroupsJoin extends Request
{
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;
        return $this;
    }

    public function setNotSure($not_sure)
    {
        $this->vkarg_not_sure = $not_sure;
        return $this;
    }


    public function doRequest()
    {
        $this->setRequiredParams('group_id');

        $this->setMethod("groups.join");

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
        isset($json->response)
        ) {
            return true;
        }

        return false;
    }

}