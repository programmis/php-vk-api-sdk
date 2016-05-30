<?php

namespace VkSdk\Polls;

use VkSdk\Includes\Request;
use VkSdk\Polls\Includes\PollVotersInfo;
use VkSdk\Users\Includes\UserInfo;

class PollsGetVoters extends Request
{

    private $answer_ids = [];
    private $count;
    private $fields = [];

    private $voters = [];

    public function getVoters()
    {
        return $this->voters;
    }

    public function setPollId($poll_id)
    {
        $this->vkarg_poll_id = $poll_id;
        return $this;
    }

    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;
        return $this;
    }

    public function setIsBoard($is_board)
    {
        $this->vkarg_is_board = $is_board;
        return $this;
    }

    public function setNameCase($name_case)
    {
        $this->vkarg_name_case = $name_case;
        return $this;
    }

    public function setFriendsOnly($friends_only)
    {
        $this->vkarg_friends_only = $friends_only;
        return $this;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    public function setCount($count)
    {
        $this->vkarg_count = $count;
        return $this;
    }

    public function setAnswerIds($answer_ids)
    {
        $this->answer_ids = $answer_ids;
        return $this;
    }

    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("polls.getVoters");

        if ($this->answer_ids) {
            $this->setParameter("answer_ids", implode(",", $this->answer_ids));
        }
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