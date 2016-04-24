<?php

namespace VkSdk\Polls\Includes;

class PollAnswerInfo
{

    private $id;
    private $text;
    private $votes;
    private $rate;

    public function getId()
    {
        return $this->id;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getVotes()
    {
        return $this->votes;
    }

    public function getRate()
    {
        return $this->rate;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function setVotes($votes)
    {
        $this->votes = $votes;
        return $this;
    }

    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

}