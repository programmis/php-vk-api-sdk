<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

class FriendsGet extends Request
{

    private $count;
    private $fields = [];
    private $items = [];

    public function getItems()
    {
        return $this->items;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setNameCase($name_case)
    {
        $this->vkarg_name_case = $name_case;
        return $this;
    }

    public function setField($fields)
    {
        if (is_array($fields)) {
            $this->fields = $fields;
        } else {
            $this->fields[] = $fields;
        }
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

    public function setListId($list_id)
    {
        $this->vkarg_list_id = $list_id;
        return $this;
    }

    public function setOrder($order)
    {
        $this->vkarg_order = $order;
        return $this;
    }

    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("friends.get");

        if ($this->fields) {
            $this->setParameter("fields", implode(",", $this->fields));
        }

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
            isset($json->response) && $json->response &&
            isset($json->response->count)
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