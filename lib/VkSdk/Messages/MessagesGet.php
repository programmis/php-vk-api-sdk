<?php

namespace VkSdk\Messages;

use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\MessageItem;

class MessagesGet extends Request
{
    
    private $count;

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
        $this->vkarg_out = $out;
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

    public function setTimeOffset($time_offset)
    {
        $this->vkarg_time_offset = $time_offset;
        return $this;
    }

    public function setFilters($filters)
    {
        $this->vkarg_filters = $filters;
        return $this;
    }

    public function setPreviewLength($preview_length)
    {
        $this->vkarg_preview_length = $preview_length;
        return $this;
    }

    public function setLastMessageId($last_message_id)
    {
        $this->vkarg_last_message_id = $last_message_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("messages.get");

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