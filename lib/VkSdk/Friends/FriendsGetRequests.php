<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

class FriendsGetRequests extends Request
{
    private $count;
    private $extended;
    private $items;

    public function getItems()
    {
        return $this->items;
    }

    public function setSuggested($suggested)
    {
        $this->vkarg_suggested = $suggested;
        return $this;
    }

    public function setSort($sort)
    {
        $this->vkarg_sort = $sort;
        return $this;
    }

    public function setOut($out)
    {
        $this->vkarg_out = $out;
        return $this;
    }

    public function setNeedMutual($need_mutual)
    {
        $this->vkarg_need_mutual = $need_mutual;
        return $this;
    }

    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;
        return $this;
    }

    public function setCount($count)
    {
        $this->vkarg_count = $count;
        return $this;
    }

    public function setExtended($extended)
    {
        $this->extended = $extended;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("friends.getRequests");

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (isset($json->response) && $json->response
            && isset($json->response->count)
        ) {
            $this->count = $json->response->count;
            if (isset($json->response->items) && $json->response->items) {
                $this->items = $json->response->items;
            }
            return true;
        }

        return false;
    }
}
