<?php

namespace VkSdk\Board\Includes;

use lib\AutoFillObject;

/**
 * Class TopicPoll
 * @package VkSdk\Board\Includes
 */
class TopicPoll
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $answer_id;

    /**
     * @var array
     */
    private $answers;

    /**
     * @var integer
     */
    private $created;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $is_closed;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var integer
     */
    private $poll_id;

    /**
     * @var string
     */
    private $question;

    /**
     * @var string
     */
    private $votes;

    /**
     * Current user's answer ID
     *
     * @return integer
     */
    public function getAnswerId()
    {
        return $this->answer_id;
    }

    /**
     * @return $this
     *
     * @param integer $answer_id
     */
    public function setAnswerId($answer_id)
    {
        $this->answer_id = $answer_id;

        return $this;
    }

    /**
     * @return array
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * @return $this
     *
     * @param array $answers
     */
    public function setAnswers(array $answers)
    {
        $this->answers = $answers;

        return $this;
    }

    /**
     * Date when poll has been created in Unixtime
     *
     * @return integer
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return $this
     *
     * @param integer $created
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Information whether the poll is closed
     *
     * @return integer
     */
    public function getIsClosed()
    {
        return $this->is_closed;
    }

    /**
     * @return $this
     *
     * @param integer $is_closed
     */
    public function setIsClosed($is_closed)
    {
        $this->is_closed = $is_closed;

        return $this;
    }

    /**
     * Poll owner's ID
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    /**
     * Poll ID
     *
     * @return integer
     */
    public function getPollId()
    {
        return $this->poll_id;
    }

    /**
     * @return $this
     *
     * @param integer $poll_id
     */
    public function setPollId($poll_id)
    {
        $this->poll_id = $poll_id;

        return $this;
    }

    /**
     * Poll question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @return $this
     *
     * @param string $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Votes number
     *
     * @return string
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * @return $this
     *
     * @param string $votes
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;

        return $this;
    }
}
