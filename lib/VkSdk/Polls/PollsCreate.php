<?php

namespace VkSdk\Polls;

use VkSdk\Includes\Request;
use VkSdk\Polls\Includes\PollAnswerInfo;
use VkSdk\Polls\Includes\PollInfo;

class PollsCreate extends Request
{

    private $question;
    private $is_anonymous;
    private $owner_id;
    private $add_answers;

    /** 
     * @var  PollInfo 
     */
    private $poll_info;

    public function setQuestion($question)
    {
        $this->question = $question;
        return $this;
    }

    public function setIsAnonymous($is_anonymous)
    {
        $this->is_anonymous = $is_anonymous;
        return $this;
    }

    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;
        return $this;
    }

    public function setAddAnswers($add_answers)
    {
        $this->add_answers = $add_answers;
        return $this;
    }

    public function addAnswer($answer)
    {
        $this->add_answers[] = $answer;
        return $this;
    }

    public function getPollInfo()
    {
        return $this->poll_info;
    }

    public function doRequest()
    {
        $this->setMethod("polls.create");

        if ($this->question) {
            $this->setParameter("question", $this->question);
        }
        if ($this->is_anonymous) {
            $this->setParameter("is_anonymous", $this->is_anonymous);
        }
        if ($this->owner_id) {
            $this->setParameter("owner_id", $this->owner_id);
        }
        if ($this->add_answers) {
            $this->setParameter("add_answers", json_encode($this->add_answers));
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
            isset($json->response->id) && $json->response->id
        ) {
            $this->poll_info = new PollInfo();
            $this->poll_info->setId($json->response->id);
            if (isset($json->response->owner_id)) {
                $this->poll_info->setOwnerId($json->response->owner_id);
            }
            if (isset($json->response->created)) {
                $this->poll_info->setCreated($json->response->created);
            }
            if (isset($json->response->question)) {
                $this->poll_info->setQuestion($json->response->question);
            }
            if (isset($json->response->votes)) {
                $this->poll_info->setVotes($json->response->votes);
            }
            if (isset($json->response->answer_id)) {
                $this->poll_info->setAnswerId($json->response->answer_id);
            }
            if (isset($json->response->anonymous)) {
                $this->poll_info->setAnonymous($json->response->anonymous);
            }
            if (isset($json->response->owner_id)) {
                $this->poll_info->setOwnerId($json->response->owner_id);
            }
            if (isset($json->response->answers)) {
                foreach ($json->response->answers as $ans) {
                    if (isset($ans->id) && isset($ans->text) && isset($ans->votes) && isset($ans->rate)) {
                        $answer = new PollAnswerInfo();
                        $answer->setId($ans->id)
                            ->setText($ans->text)
                            ->setVotes($ans->votes)
                            ->setRate($ans->rate);
                        $this->poll_info->addAnswer($answer);
                    }
                }
            }
            return true;
        }
        return false;
    }

}