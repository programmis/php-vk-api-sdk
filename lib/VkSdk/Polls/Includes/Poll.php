<?php
namespace VkSdk\Polls\Includes;

use lib\AutoFillObject;

/**
 * Class Poll
 * @package VkSdk\Polls\Includes
 */
class Poll
{
    use AutoFillObject;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $anonymous;

    /**
     * @var integer
     */
    public $answer_id;

    /**
     * @var Answer[]
     */
    public $answers;

    /**
     * @var integer
     */
    public $created;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $owner_id;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $votes;

    /**
     * @return $this
     *
     * @param Answer $answer
     */
    public function addAnswer(Answer $answer)
    {
        $this->answers[] = $answer;

        return $this;
    }

    /**
     * Information whether the pole is anonymous
     * @return integer
     */
    public function getAnonymous()
    {
        return $this->anonymous;
    }

    /**
     * Current user's answer ID
     * @return integer
     */
    public function getAnswerId()
    {
        return $this->answer_id;
    }

    /**
     * @return Answer[]
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Date when poll has been created in Unixtime
     * @return integer
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Poll ID
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Poll owner's ID
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Poll question
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Votes number
     * @return string
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'answers' => [
                'class'  => 'VkSdk\Polls\Includes\Answer',
                'method' => 'addAnswer'
            ],
        ];
    }

    /**
     * @return $this
     *
     * @param integer $anonymous
     */
    public function setAnonymous($anonymous)
    {
        $this->anonymous = $anonymous;

        return $this;
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
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
