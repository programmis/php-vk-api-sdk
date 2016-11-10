<?php
namespace VkSdk\Polls;

use VkSdk\Includes\Request;

/**
 * Returns detailed information about a poll by its ID.
 * Class PollsGetById
 *
 * @package VkSdk\Polls
 */
class PollsGetById extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["poll_id"]);

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
        return "polls.getById";
    }

    /**
     * '1' – poll is in a board, '0' – poll is on a wall. ; '0' by default.
     *
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
