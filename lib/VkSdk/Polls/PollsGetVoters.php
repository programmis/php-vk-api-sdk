<?php

namespace VkSdk\Polls;

use VkSdk\Includes\Request;
use VkSdk\Polls\Includes\PollVotersInfo;
use VkSdk\Users\Includes\UserInfo;

class PollsGetVoters extends Request
{

    private $owner_id;
    private $poll_id;
    private $answer_ids = array();
    private $is_board;
    private $friends_only;
    private $offset;
    private $count;
    private $fields = array();
    private $name_case;

    private $voters = array();

    public function getVoters()
    {
        return $this->voters;
    }

    public function setPollId($poll_id)
    {
        $this->poll_id = $poll_id;
        return $this;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    public function setIsBoard($is_board)
    {
        $this->is_board = $is_board;
        return $this;
    }

    public function setNameCase($name_case)
    {
        $this->name_case = $name_case;
        return $this;
    }

    public function setFriendsOnly($friends_only)
    {
        $this->friends_only = $friends_only;
        return $this;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    public function setAnswerIds($answer_ids)
    {
        $this->answer_ids = $answer_ids;
        return $this;
    }

    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("polls.getVoters");

        if ($this->owner_id) {
            $this->setParameter("owner_id", $this->owner_id);
        }
        if ($this->poll_id) {
            $this->setParameter("poll_id", $this->poll_id);
        }
        if ($this->answer_ids) {
            $this->setParameter("answer_ids", implode(",", $this->answer_ids));
        }
        if ($this->is_board) {
            $this->setParameter("is_board", $this->is_board);
        }
        if ($this->friends_only) {
            $this->setParameter("friends_only", $this->friends_only);
        }
        if ($this->offset) {
            $this->setParameter("offset", $this->offset);
        }
        if ($this->count) {
            $this->setParameter("count", $this->count);
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
            isset($json->response[0]) && isset($json->response[0]->answer_id)
        ) {
            foreach ($json->response as $voters) {
                $poll_voters = new PollVotersInfo();
                $poll_voters->setAnswerId($voters->answer_id);
                $poll_voters->setCount($voters->users->count);                
                foreach ($voters->users->items as $user) {
                    $user_info = new UserInfo();
                    $user_info->setFirstName($user->first_name)
                        ->setLastName($user->last_name)
                        ->setId($user->id);
                    if (isset($user->sex)) {
                        $user_info->setSex($user->sex);
                    }
                    if (isset($user->photo_50)) {
                        $user_info->setPhoto50($user->photo_50);
                    }
                    $poll_voters->addUser($user_info);
                }
                $this->voters[] = $poll_voters;
            }
            return true;
        }
        return false;
    }

}