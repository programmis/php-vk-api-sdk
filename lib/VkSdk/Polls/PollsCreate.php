<?php
namespace VkSdk\Polls;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Polls\Includes\Poll;

/**
 * Creates polls that can be attached to the users' or communities' posts.
 * Class PollsCreate
 *
 * @package VkSdk\Polls
 */
class PollsCreate extends Request
{

    use AutoFillObject;

    /**
     * @var Poll
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
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
        $this->vkarg_add_answers = $add_answers;

        return $this;
    }

    /**
     * '1' – anonymous poll, participants list is hidden;; '0' – public poll, participants list is available;; Default value is '0'.
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
     * If a poll will be added to a communty it is required to send a negative group identifier. Current user by default.
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
