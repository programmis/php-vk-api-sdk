<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

class FriendsGet extends Request
{

    private $count;
    private $offset;
    private $extended;
    private $need_mutual;
    private $out;
    private $sort;
    private $suggested;
    private $items;

    public function getItems()
    {
        return $this->items;
    }

    public function setSuggested($suggested)
    {
        $this->suggested = $suggested;
        return $this;
    }

    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    public function setOut($out)
    {
        $this->out = $out;
        return $this;
    }

    public function setNeedMutual($need_mutual)
    {
        $this->need_mutual = $need_mutual;
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

    public function setExtended($extended)
    {
        $this->extended = $extended;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("friends.getRequests");

        if ($this->need_mutual) {
            $this->setParameter("need_mutual", $this->need_mutual);
        }
        if ($this->out) {
            $this->setParameter("out", $this->out);
        }
        if ($this->sort) {
            $this->setParameter("sort", $this->sort);
        }
        if ($this->suggested) {
            $this->setParameter("suggested", $this->suggested);
        }
        if ($this->count) {
            $this->setParameter("count", $this->count);
        }
        if ($this->offset) {
            $this->setParameter("offset", $this->offset);
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