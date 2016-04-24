<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

class FriendsGet extends Request
{

    private $user_id;
    private $order;
    private $list_id;
    private $count;
    private $offset;
    private $fields = array();
    private $items = array();
    private $name_case;

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
        $this->name_case = $name_case;
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
        $this->offset = $offset;
        return $this;
    }

    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    public function setListId($list_id)
    {
        $this->list_id = $list_id;
        return $this;
    }

    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("friends.get");

        if ($this->user_id) {
            $this->setParameter("user_id", $this->user_id);
        }
        if ($this->order) {
            $this->setParameter("order", $this->order);
        }
        if ($this->list_id) {
            $this->setParameter("list_id", $this->list_id);
        }
        if ($this->count) {
            $this->setParameter("count", $this->count);
        }
        if ($this->offset) {
            $this->setParameter("offset", $this->offset);
        }
        if ($this->fields) {
            $this->setParameter("fields", implode(",", $this->fields));
        }
        if ($this->name_case) {
            $this->setParameter("name_case", $this->name_case);
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