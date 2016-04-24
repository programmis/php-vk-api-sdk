<?php

namespace VkSdk\Messages;

use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\MessageItem;

class MessagesGet extends Request
{

    private $out;
    private $offset;
    private $count;
    private $time_offset;
    private $filters;
    private $preview_length;
    private $last_message_id;

    private $messages = array();

    public function getMessages()
    {
        return $this->messages;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setOut($out)
    {
        $this->out = $out;
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

    public function setTimeOffset($time_offset)
    {
        $this->time_offset = $time_offset;
        return $this;
    }

    public function setFilters($filters)
    {
        $this->filters = $filters;
        return $this;
    }

    public function setPreviewLength($preview_length)
    {
        $this->preview_length = $preview_length;
        return $this;
    }

    public function setLastMessageId($last_message_id)
    {
        $this->last_message_id = $last_message_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("messages.get");

        if ($this->out) {
            $this->setParameter("out", $this->out);
        }
        if ($this->offset) {
            $this->setParameter("offset", $this->offset);
        }
        if ($this->count) {
            $this->setParameter("count", $this->count);
        }
        if ($this->time_offset) {
            $this->setParameter("time_offset", $this->time_offset);
        }
        if ($this->filters) {
            $this->setParameter("filters", $this->filters);
        }
        if ($this->preview_length) {
            $this->setParameter("preview_length", $this->preview_length);
        }
        if ($this->last_message_id) {
            $this->setParameter("last_message_id", $this->last_message_id);
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
            isset($json->response->count) &&
            isset($json->response->items)
        ) {
            $this->count = $json->response->count;

            foreach ($json->response->items as $key => $msg) {
                $this->messages[$key] = new MessageItem();
                $this->messages[$key]->setId($msg->id)
                    ->setDate($msg->date)
                    ->setOut($msg->out)
                    ->setUserId($msg->user_id)
                    ->setReadState($msg->read_state)
                    ->setTitle($msg->title)
                    ->setBody($msg->body);
            }

            return true;
        }

        return false;
    }

}