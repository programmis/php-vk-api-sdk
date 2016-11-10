<?php

namespace VkSdk\Polls;

use VkSdk\Includes\Request;

/**
 * Edits created polls
 * Class PollsEdit
 * @package VkSdk\Polls
 */
class PollsEdit extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id", "poll_id"]);

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
        return "polls.edit";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * answers list, for example: ; "["yes","no","maybe"]"
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
     * list of answer ids to be deleted. For example:; "[382967099, 382967103]"
     *
     * @return $this
     *
     * @param string $delete_answers
     */
    public function setDeleteAnswers($delete_answers)
    {
        $this->vkarg_delete_answers = $delete_answers;

        return $this;
    }

    /**
     * object containing answers that need to be edited;; key – answer id, value – new answer text.; Example:; {"382967099":"option1", "382967103":"option2"}"
     *
     * @return $this
     *
     * @param string $edit_answers
     */
    public function setEditAnswers($edit_answers)
    {
        $this->vkarg_edit_answers = $edit_answers;

        return $this;
    }

    /**
     * poll owner id
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
     * edited poll's id
     *
     * @return $this
     *
     * @param integer $poll_id
     */
    public function setPollId($poll_id)
    {
        $this->vkarg_poll_id = $poll_id;

        return $this;
    }

    /**
     * new question text
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
