<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Photos
 *
 * @package VkApi\Methods
 */
class Photos
{
    use ApiTrait;

    /**
     * @return \VkSdk\Photos\PhotosConfirmTag
     */
    public function confirmTag()
    {
        return new \VkSdk\Photos\PhotosConfirmTag($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosCopy
     */
    public function copy()
    {
        return new \VkSdk\Photos\PhotosCopy($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosCreateAlbum
     */
    public function createAlbum()
    {
        return new \VkSdk\Photos\PhotosCreateAlbum($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosCreateComment
     */
    public function createComment()
    {
        return new \VkSdk\Photos\PhotosCreateComment($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosDelete
     */
    public function delete()
    {
        return new \VkSdk\Photos\PhotosDelete($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosDeleteAlbum
     */
    public function deleteAlbum()
    {
        return new \VkSdk\Photos\PhotosDeleteAlbum($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosDeleteComment
     */
    public function deleteComment()
    {
        return new \VkSdk\Photos\PhotosDeleteComment($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosEdit
     */
    public function edit()
    {
        return new \VkSdk\Photos\PhotosEdit($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosEditAlbum
     */
    public function editAlbum()
    {
        return new \VkSdk\Photos\PhotosEditAlbum($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosEditComment
     */
    public function editComment()
    {
        return new \VkSdk\Photos\PhotosEditComment($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGet
     */
    public function get()
    {
        return new \VkSdk\Photos\PhotosGet($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetAlbums
     */
    public function getAlbums()
    {
        return new \VkSdk\Photos\PhotosGetAlbums($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetAlbumsCount
     */
    public function getAlbumsCount()
    {
        return new \VkSdk\Photos\PhotosGetAlbumsCount($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetAll
     */
    public function getAll()
    {
        return new \VkSdk\Photos\PhotosGetAll($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetAllComments
     */
    public function getAllComments()
    {
        return new \VkSdk\Photos\PhotosGetAllComments($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetById
     */
    public function getById()
    {
        return new \VkSdk\Photos\PhotosGetById($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetChatUploadServer
     */
    public function getChatUploadServer()
    {
        return new \VkSdk\Photos\PhotosGetChatUploadServer($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetComments
     */
    public function getComments()
    {
        return new \VkSdk\Photos\PhotosGetComments($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetMarketAlbumUploadServer
     */
    public function getMarketAlbumUploadServer()
    {
        return new \VkSdk\Photos\PhotosGetMarketAlbumUploadServer($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetMarketUploadServer
     */
    public function getMarketUploadServer()
    {
        return new \VkSdk\Photos\PhotosGetMarketUploadServer($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetMessagesUploadServer
     */
    public function getMessagesUploadServer()
    {
        return new \VkSdk\Photos\PhotosGetMessagesUploadServer($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetNewTags
     */
    public function getNewTags()
    {
        return new \VkSdk\Photos\PhotosGetNewTags($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetOwnerPhotoUploadServer
     */
    public function getOwnerPhotoUploadServer()
    {
        return new \VkSdk\Photos\PhotosGetOwnerPhotoUploadServer($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetTags
     */
    public function getTags()
    {
        return new \VkSdk\Photos\PhotosGetTags($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetUploadServer
     */
    public function getUploadServer()
    {
        return new \VkSdk\Photos\PhotosGetUploadServer($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetUserPhotos
     */
    public function getUserPhotos()
    {
        return new \VkSdk\Photos\PhotosGetUserPhotos($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosGetWallUploadServer
     */
    public function getWallUploadServer()
    {
        return new \VkSdk\Photos\PhotosGetWallUploadServer($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosMakeCover
     */
    public function makeCover()
    {
        return new \VkSdk\Photos\PhotosMakeCover($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosMove
     */
    public function move()
    {
        return new \VkSdk\Photos\PhotosMove($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosPutTag
     */
    public function putTag()
    {
        return new \VkSdk\Photos\PhotosPutTag($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosRemoveTag
     */
    public function removeTag()
    {
        return new \VkSdk\Photos\PhotosRemoveTag($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosReorderAlbums
     */
    public function reorderAlbums()
    {
        return new \VkSdk\Photos\PhotosReorderAlbums($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosReorderPhotos
     */
    public function reorderPhotos()
    {
        return new \VkSdk\Photos\PhotosReorderPhotos($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosReport
     */
    public function report()
    {
        return new \VkSdk\Photos\PhotosReport($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosReportComment
     */
    public function reportComment()
    {
        return new \VkSdk\Photos\PhotosReportComment($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosRestore
     */
    public function restore()
    {
        return new \VkSdk\Photos\PhotosRestore($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosRestoreComment
     */
    public function restoreComment()
    {
        return new \VkSdk\Photos\PhotosRestoreComment($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosSave
     */
    public function save()
    {
        return new \VkSdk\Photos\PhotosSave($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosSaveMarketAlbumPhoto
     */
    public function saveMarketAlbumPhoto()
    {
        return new \VkSdk\Photos\PhotosSaveMarketAlbumPhoto($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosSaveMarketPhoto
     */
    public function saveMarketPhoto()
    {
        return new \VkSdk\Photos\PhotosSaveMarketPhoto($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosSaveMessagesPhoto
     */
    public function saveMessagesPhoto()
    {
        return new \VkSdk\Photos\PhotosSaveMessagesPhoto($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosSaveOwnerPhoto
     */
    public function saveOwnerPhoto()
    {
        return new \VkSdk\Photos\PhotosSaveOwnerPhoto($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosSaveWallPhoto
     */
    public function saveWallPhoto()
    {
        return new \VkSdk\Photos\PhotosSaveWallPhoto($this->token);
    }

    /**
     * @return \VkSdk\Photos\PhotosSearch
     */
    public function search()
    {
        return new \VkSdk\Photos\PhotosSearch($this->token);
    }
}
