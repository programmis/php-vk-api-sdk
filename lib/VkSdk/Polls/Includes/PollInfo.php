<?php

namespace VkSdk\Polls\Includes;

class PollInfo
{
    private $id;
    private $owner_id;
    private $created;
    private $question;
    private $votes;
    private $answer_id;
    private $answers = [];
    private $anonymous;

    public function getAnswers()
    {
        return $this->answers;
    }

    public function addAnswer(PollAnswerInfo $answerInfo)
    {
        return $this->answers[] = $answerInfo;
    }

    public function getAnonymous()
    {
        return $this->anonymous;
    }

    public function setAnonymous($anonymous)
    {
        $this->anonymous = $anonymous;
        return $this;
    }

    public function getAnswerId()
    {
        return $this->answer_id;
    }

    public function setAnswerId($answer_id)
    {
        $this->answer_id = $answer_id;
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getOwnerId()
    {
        return $this->owner_id;
    }

    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;
        return $this;
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function setQuestion($question)
    {
        $this->question = $question;
        return $this;
    }

    public function getVotes()
    {
        return $this->votes;
    }

    public function setVotes($votes)
    {
        $this->votes = $votes;
        return $this;
    }
}
