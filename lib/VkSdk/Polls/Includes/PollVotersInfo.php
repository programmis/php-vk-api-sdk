<?php

namespace VkSdk\Polls\Includes;

use VkSdk\Users\Includes\UserInfo;

class PollVotersInfo
{

    private $answer_id;
    private $users = [];
    private $count;

    public function getAnswerId()
    {
        return $this->answer_id;
    }

    public function setAnswerId($answer_id)
    {
        $this->answer_id = $answer_id;
        return $this;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    public function getUsers()
    {
        return $this->users;
    }

    public function addUser(UserInfo $info)
    {
        return $this->users[] = $info;
    }

}