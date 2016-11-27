<?php

namespace VkSdk\Polls;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Polls\Includes\Poll;

/**
 * Creates polls that can be attached to the users' or communities' posts.
 * Class PollsCreate
 * @package VkSdk\Polls
 */
class PollsCreate extends Request
{
    use AutoFillObject;

    /** @var array $add_answers */
    private $add_answers = [];

    /**
     * @var Poll
     */
    private $response;

    /**
     * @return Poll
     */
    public function getPollInfo()
    {
        return $this->response;
    }

    /**
     * @param string $answer
     *
     * @return $this
     */
    public function addAnswer($answer)
    {
        $this->add_answers[] = $answer;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setParameter('add_answers', json_encode($this->add_answers));

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->fillByJson($json);

                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "polls.create";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Polls\Includes\Poll',
        ];
    }

    /**
     * available answers list, for example:; " ["yes","no","maybe"]"; There can be from 1 to 10 answers.
     *
     * @return $this
     *
     * @param string $add_answers
     */
    public function setAddAnswers($add_answers)
    {
        $this->add_answers = $add_answers;

        return $this;
    }

    /**
     * '1' – anonymous poll, participants list is hidden;; '0' – public poll, participants list is available;; Default
     * value is '0'.
     *
     * @return $this
     *
     * @param boolean $is_anonymous
     */
    public function setIsAnonymous($is_anonymous)
    {
        $this->vkarg_is_anonymous = $is_anonymous;

        return $this;
    }

    /**
     * If a poll will be added to a communty it is required to send a negative group identifier. Current user by
     * default.
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }

    /**
     * question text
     *
     * @return $this
     *
     * @param string $question
     */
    public function setQuestion($question)
    {
        $this->vkarg_question = $question;

        return $this;
    }
}
