<?php

namespace VkSdk\Messages\Includes;

class MessageItem
{

    private $id;
    private $date;
    private $out;
    private $user_id;
    private $read_state;
    private $title;
    private $body;

    public function getBody()
    {
        return $this->body;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getReadState()
    {
        return $this->read_state;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getOut()
    {
        return $this->out;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setReadState($read_state)
    {
        $this->read_state = $read_state;
        return $this;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function setOut($out)
    {
        $this->out = $out;
        return $this;
    }

    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}