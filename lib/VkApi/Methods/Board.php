<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Board
 *
 * @package VkApi\Methods
 */
class Board
{
    use ApiTrait;

    /**
     * @return \VkSdk\Board\BoardAddTopic
     */
    public function addTopic()
    {
        return new \VkSdk\Board\BoardAddTopic($this->token);
    }

    /**
     * @return \VkSdk\Board\BoardCloseTopic
     */
    public function closeTopic()
    {
        return new \VkSdk\Board\BoardCloseTopic($this->token);
    }

    /**
     * @return \VkSdk\Board\BoardCreateComment
     */
    public function createComment()
    {
        return new \VkSdk\Board\BoardCreateComment($this->token);
    }

    /**
     * @return \VkSdk\Board\BoardDeleteComment
     */
    public function deleteComment()
    {
        return new \VkSdk\Board\BoardDeleteComment($this->token);
    }

    /**
     * @return \VkSdk\Board\BoardDeleteTopic
     */
    public function deleteTopic()
    {
        return new \VkSdk\Board\BoardDeleteTopic($this->token);
    }

    /**
     * @return \VkSdk\Board\BoardEditComment
     */
    public function editComment()
    {
        return new \VkSdk\Board\BoardEditComment($this->token);
    }

    /**
     * @return \VkSdk\Board\BoardEditTopic
     */
    public function editTopic()
    {
        return new \VkSdk\Board\BoardEditTopic($this->token);
    }

    /**
     * @return \VkSdk\Board\BoardFixTopic
     */
    public function fixTopic()
    {
        return new \VkSdk\Board\BoardFixTopic($this->token);
    }

    /**
     * @return \VkSdk\Board\BoardGetComments
     */
    public function getComments()
    {
        return new \VkSdk\Board\BoardGetComments($this->token);
    }

    /**
     * @return \VkSdk\Board\BoardGetTopics
     */
    public function getTopics()
    {
        return new \VkSdk\Board\BoardGetTopics($this->token);
    }

    /**
     * @return \VkSdk\Board\BoardOpenTopic
     */
    public function openTopic()
    {
        return new \VkSdk\Board\BoardOpenTopic($this->token);
    }

    /**
     * @return \VkSdk\Board\BoardRestoreComment
     */
    public function restoreComment()
    {
        return new \VkSdk\Board\BoardRestoreComment($this->token);
    }

    /**
     * @return \VkSdk\Board\BoardUnfixTopic
     */
    public function unfixTopic()
    {
        return new \VkSdk\Board\BoardUnfixTopic($this->token);
    }
}
