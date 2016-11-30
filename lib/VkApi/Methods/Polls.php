<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Polls
 *
 * @package VkApi\Methods
 */
class Polls
{
    use ApiTrait;

    /**
     * @return \VkSdk\Polls\PollsAddVote
     */
    public function addVote()
    {
        return new \VkSdk\Polls\PollsAddVote($this->token);
    }

    /**
     * @return \VkSdk\Polls\PollsCreate
     */
    public function create()
    {
        return new \VkSdk\Polls\PollsCreate($this->token);
    }

    /**
     * @return \VkSdk\Polls\PollsDeleteVote
     */
    public function deleteVote()
    {
        return new \VkSdk\Polls\PollsDeleteVote($this->token);
    }

    /**
     * @return \VkSdk\Polls\PollsEdit
     */
    public function edit()
    {
        return new \VkSdk\Polls\PollsEdit($this->token);
    }

    /**
     * @return \VkSdk\Polls\PollsGetById
     */
    public function getById()
    {
        return new \VkSdk\Polls\PollsGetById($this->token);
    }

    /**
     * @return \VkSdk\Polls\PollsGetVoters
     */
    public function getVoters()
    {
        return new \VkSdk\Polls\PollsGetVoters($this->token);
    }
}
