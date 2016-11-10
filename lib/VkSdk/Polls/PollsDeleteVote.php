<?php
namespace VkSdk\Polls;

use VkSdk\Includes\Request;

/**
 * Deletes the current user's vote from the selected answer in the poll.
 * Class PollsDeleteVote
 *
 * @package VkSdk\Polls
 */
class PollsDeleteVote extends Request
{

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["poll_id", "answer_id"]);

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
        return "polls.deleteVote";
    }

    /**
     * See constants of class BoolInt
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Answer ID.
     *
     * @return $this
     *
     * @param integer $answer_id
     */
    public function setAnswerId($answer_id)
    {
        $this->vkarg_answer_id = $answer_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param boolean $is_board
     */
    public function setIsBoard($is_board)
    {
        $this->vkarg_is_board = $is_board;

        return $this;
    }

    /**
     * ID of the user or community that owns the poll. Use a negative value to designate a community ID.
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
     * Poll ID.
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
}
