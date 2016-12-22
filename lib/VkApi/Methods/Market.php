<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Market
 *
 * @package VkApi\Methods
 */
class Market
{
    use ApiTrait;

    /**
     * @return \VkSdk\Market\MarketAdd
     */
    public function add()
    {
        return new \VkSdk\Market\MarketAdd($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketAddAlbum
     */
    public function addAlbum()
    {
        return new \VkSdk\Market\MarketAddAlbum($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketAddToAlbum
     */
    public function addToAlbum()
    {
        return new \VkSdk\Market\MarketAddToAlbum($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketCreateComment
     */
    public function createComment()
    {
        return new \VkSdk\Market\MarketCreateComment($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketDelete
     */
    public function delete()
    {
        return new \VkSdk\Market\MarketDelete($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketDeleteAlbum
     */
    public function deleteAlbum()
    {
        return new \VkSdk\Market\MarketDeleteAlbum($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketDeleteComment
     */
    public function deleteComment()
    {
        return new \VkSdk\Market\MarketDeleteComment($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketEdit
     */
    public function edit()
    {
        return new \VkSdk\Market\MarketEdit($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketEditAlbum
     */
    public function editAlbum()
    {
        return new \VkSdk\Market\MarketEditAlbum($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketEditComment
     */
    public function editComment()
    {
        return new \VkSdk\Market\MarketEditComment($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketGet
     */
    public function get()
    {
        return new \VkSdk\Market\MarketGet($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketGetAlbumById
     */
    public function getAlbumById()
    {
        return new \VkSdk\Market\MarketGetAlbumById($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketGetAlbums
     */
    public function getAlbums()
    {
        return new \VkSdk\Market\MarketGetAlbums($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketGetById
     */
    public function getById()
    {
        return new \VkSdk\Market\MarketGetById($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketGetCategories
     */
    public function getCategories()
    {
        return new \VkSdk\Market\MarketGetCategories($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketGetComments
     */
    public function getComments()
    {
        return new \VkSdk\Market\MarketGetComments($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketRemoveFromAlbum
     */
    public function removeFromAlbum()
    {
        return new \VkSdk\Market\MarketRemoveFromAlbum($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketReorderAlbums
     */
    public function reorderAlbums()
    {
        return new \VkSdk\Market\MarketReorderAlbums($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketReorderItems
     */
    public function reorderItems()
    {
        return new \VkSdk\Market\MarketReorderItems($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketReport
     */
    public function report()
    {
        return new \VkSdk\Market\MarketReport($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketReportComment
     */
    public function reportComment()
    {
        return new \VkSdk\Market\MarketReportComment($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketRestore
     */
    public function restore()
    {
        return new \VkSdk\Market\MarketRestore($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketRestoreComment
     */
    public function restoreComment()
    {
        return new \VkSdk\Market\MarketRestoreComment($this->token);
    }

    /**
     * @return \VkSdk\Market\MarketSearch
     */
    public function search()
    {
        return new \VkSdk\Market\MarketSearch($this->token);
    }
}
