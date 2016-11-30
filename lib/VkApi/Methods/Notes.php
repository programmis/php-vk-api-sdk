<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Notes
 *
 * @package VkApi\Methods
 */
class Notes
{
    use ApiTrait;

    /**
     * @return \VkSdk\Notes\NotesAdd
     */
    public function add()
    {
        return new \VkSdk\Notes\NotesAdd($this->token);
    }

    /**
     * @return \VkSdk\Notes\NotesCreateComment
     */
    public function createComment()
    {
        return new \VkSdk\Notes\NotesCreateComment($this->token);
    }

    /**
     * @return \VkSdk\Notes\NotesDelete
     */
    public function delete()
    {
        return new \VkSdk\Notes\NotesDelete($this->token);
    }

    /**
     * @return \VkSdk\Notes\NotesDeleteComment
     */
    public function deleteComment()
    {
        return new \VkSdk\Notes\NotesDeleteComment($this->token);
    }

    /**
     * @return \VkSdk\Notes\NotesEdit
     */
    public function edit()
    {
        return new \VkSdk\Notes\NotesEdit($this->token);
    }

    /**
     * @return \VkSdk\Notes\NotesEditComment
     */
    public function editComment()
    {
        return new \VkSdk\Notes\NotesEditComment($this->token);
    }

    /**
     * @return \VkSdk\Notes\NotesGet
     */
    public function get()
    {
        return new \VkSdk\Notes\NotesGet($this->token);
    }

    /**
     * @return \VkSdk\Notes\NotesGetById
     */
    public function getById()
    {
        return new \VkSdk\Notes\NotesGetById($this->token);
    }

    /**
     * @return \VkSdk\Notes\NotesGetComments
     */
    public function getComments()
    {
        return new \VkSdk\Notes\NotesGetComments($this->token);
    }

    /**
     * @return \VkSdk\Notes\NotesRestoreComment
     */
    public function restoreComment()
    {
        return new \VkSdk\Notes\NotesRestoreComment($this->token);
    }
}
