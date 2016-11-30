<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Wall
 *
 * @package VkApi\Methods
 */
class Wall
{
    use ApiTrait;

    /**
     * @return \VkSdk\Wall\WallCreateComment
     */
    public function createComment()
    {
        return new \VkSdk\Wall\WallCreateComment($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallDelete
     */
    public function delete()
    {
        return new \VkSdk\Wall\WallDelete($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallDeleteComment
     */
    public function deleteComment()
    {
        return new \VkSdk\Wall\WallDeleteComment($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallEdit
     */
    public function edit()
    {
        return new \VkSdk\Wall\WallEdit($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallEditComment
     */
    public function editComment()
    {
        return new \VkSdk\Wall\WallEditComment($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallGet
     */
    public function get()
    {
        return new \VkSdk\Wall\WallGet($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallGetById
     */
    public function getById()
    {
        return new \VkSdk\Wall\WallGetById($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallGetComments
     */
    public function getComments()
    {
        return new \VkSdk\Wall\WallGetComments($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallGetReposts
     */
    public function getReposts()
    {
        return new \VkSdk\Wall\WallGetReposts($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallPin
     */
    public function pin()
    {
        return new \VkSdk\Wall\WallPin($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallPost
     */
    public function post()
    {
        return new \VkSdk\Wall\WallPost($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallReportComment
     */
    public function reportComment()
    {
        return new \VkSdk\Wall\WallReportComment($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallReportPost
     */
    public function reportPost()
    {
        return new \VkSdk\Wall\WallReportPost($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallRepost
     */
    public function repost()
    {
        return new \VkSdk\Wall\WallRepost($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallRestore
     */
    public function restore()
    {
        return new \VkSdk\Wall\WallRestore($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallRestoreComment
     */
    public function restoreComment()
    {
        return new \VkSdk\Wall\WallRestoreComment($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallSearch
     */
    public function search()
    {
        return new \VkSdk\Wall\WallSearch($this->token);
    }

    /**
     * @return \VkSdk\Wall\WallUnpin
     */
    public function unpin()
    {
        return new \VkSdk\Wall\WallUnpin($this->token);
    }
}
