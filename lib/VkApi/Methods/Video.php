<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Video
 *
 * @package VkApi\Methods
 */
class Video
{
    use ApiTrait;

    /**
     * @return \VkSdk\Video\VideoAdd
     */
    public function add()
    {
        return new \VkSdk\Video\VideoAdd($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoAddAlbum
     */
    public function addAlbum()
    {
        return new \VkSdk\Video\VideoAddAlbum($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoAddToAlbum
     */
    public function addToAlbum()
    {
        return new \VkSdk\Video\VideoAddToAlbum($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoCreateComment
     */
    public function createComment()
    {
        return new \VkSdk\Video\VideoCreateComment($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoDelete
     */
    public function delete()
    {
        return new \VkSdk\Video\VideoDelete($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoDeleteAlbum
     */
    public function deleteAlbum()
    {
        return new \VkSdk\Video\VideoDeleteAlbum($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoDeleteComment
     */
    public function deleteComment()
    {
        return new \VkSdk\Video\VideoDeleteComment($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoEdit
     */
    public function edit()
    {
        return new \VkSdk\Video\VideoEdit($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoEditAlbum
     */
    public function editAlbum()
    {
        return new \VkSdk\Video\VideoEditAlbum($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoEditComment
     */
    public function editComment()
    {
        return new \VkSdk\Video\VideoEditComment($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoGet
     */
    public function get()
    {
        return new \VkSdk\Video\VideoGet($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoGetAlbumById
     */
    public function getAlbumById()
    {
        return new \VkSdk\Video\VideoGetAlbumById($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoGetAlbums
     */
    public function getAlbums()
    {
        return new \VkSdk\Video\VideoGetAlbums($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoGetAlbumsByVideo
     */
    public function getAlbumsByVideo()
    {
        return new \VkSdk\Video\VideoGetAlbumsByVideo($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoGetCatalog
     */
    public function getCatalog()
    {
        return new \VkSdk\Video\VideoGetCatalog($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoGetCatalogSection
     */
    public function getCatalogSection()
    {
        return new \VkSdk\Video\VideoGetCatalogSection($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoGetComments
     */
    public function getComments()
    {
        return new \VkSdk\Video\VideoGetComments($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoGetNewTags
     */
    public function getNewTags()
    {
        return new \VkSdk\Video\VideoGetNewTags($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoGetTags
     */
    public function getTags()
    {
        return new \VkSdk\Video\VideoGetTags($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoGetUserVideos
     */
    public function getUserVideos()
    {
        return new \VkSdk\Video\VideoGetUserVideos($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoHideCatalogSection
     */
    public function hideCatalogSection()
    {
        return new \VkSdk\Video\VideoHideCatalogSection($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoPutTag
     */
    public function putTag()
    {
        return new \VkSdk\Video\VideoPutTag($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoRemoveFromAlbum
     */
    public function removeFromAlbum()
    {
        return new \VkSdk\Video\VideoRemoveFromAlbum($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoRemoveTag
     */
    public function removeTag()
    {
        return new \VkSdk\Video\VideoRemoveTag($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoReorderAlbums
     */
    public function reorderAlbums()
    {
        return new \VkSdk\Video\VideoReorderAlbums($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoReorderVideos
     */
    public function reorderVideos()
    {
        return new \VkSdk\Video\VideoReorderVideos($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoReport
     */
    public function report()
    {
        return new \VkSdk\Video\VideoReport($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoReportComment
     */
    public function reportComment()
    {
        return new \VkSdk\Video\VideoReportComment($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoRestore
     */
    public function restore()
    {
        return new \VkSdk\Video\VideoRestore($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoRestoreComment
     */
    public function restoreComment()
    {
        return new \VkSdk\Video\VideoRestoreComment($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoSave
     */
    public function save()
    {
        return new \VkSdk\Video\VideoSave($this->token);
    }

    /**
     * @return \VkSdk\Video\VideoSearch
     */
    public function search()
    {
        return new \VkSdk\Video\VideoSearch($this->token);
    }
}
