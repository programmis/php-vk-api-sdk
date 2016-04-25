<?php

namespace VkSdk\Groups;

use VkSdk\Includes\Request;

class GroupsJoin extends Request
{

    private $group_id;
    private $not_sure;

    private $response;

    public function getResponse()
    {
        return $this->response;
    }

    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;
        return $this;
    }

    public function setNotSure($not_sure)
    {
        $this->not_sure = $not_sure;
        return $this;
    }


    public function doRequest()
    {
        $this->setRequiredParams('group_id');
        
        $this->setMethod("groups.join");

        $this->setParameter("group_id", $this->group_id);
        if ($this->not_sure) {
            $this->setParameter("not_sure", $this->not_sure);
        }

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
            $this->response = $json->response;
            return true;
        }

        return false;
    }

}