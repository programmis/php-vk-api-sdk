<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Audio
 *
 * @package VkApi\Methods
 */
class Audio
{
    use ApiTrait;

    /**
     * @return \VkSdk\Audio\AudioAdd
     */
    public function add()
    {
        return new \VkSdk\Audio\AudioAdd($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioAddAlbum
     */
    public function addAlbum()
    {
        return new \VkSdk\Audio\AudioAddAlbum($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioDelete
     */
    public function delete()
    {
        return new \VkSdk\Audio\AudioDelete($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioDeleteAlbum
     */
    public function deleteAlbum()
    {
        return new \VkSdk\Audio\AudioDeleteAlbum($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioEdit
     */
    public function edit()
    {
        return new \VkSdk\Audio\AudioEdit($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioEditAlbum
     */
    public function editAlbum()
    {
        return new \VkSdk\Audio\AudioEditAlbum($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioGet
     */
    public function get()
    {
        return new \VkSdk\Audio\AudioGet($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioGetAlbums
     */
    public function getAlbums()
    {
        return new \VkSdk\Audio\AudioGetAlbums($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioGetBroadcastList
     */
    public function getBroadcastList()
    {
        return new \VkSdk\Audio\AudioGetBroadcastList($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioGetById
     */
    public function getById()
    {
        return new \VkSdk\Audio\AudioGetById($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioGetCount
     */
    public function getCount()
    {
        return new \VkSdk\Audio\AudioGetCount($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioGetLyrics
     */
    public function getLyrics()
    {
        return new \VkSdk\Audio\AudioGetLyrics($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioGetPopular
     */
    public function getPopular()
    {
        return new \VkSdk\Audio\AudioGetPopular($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioGetRecommendations
     */
    public function getRecommendations()
    {
        return new \VkSdk\Audio\AudioGetRecommendations($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioGetUploadServer
     */
    public function getUploadServer()
    {
        return new \VkSdk\Audio\AudioGetUploadServer($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioMoveToAlbum
     */
    public function moveToAlbum()
    {
        return new \VkSdk\Audio\AudioMoveToAlbum($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioReorder
     */
    public function reorder()
    {
        return new \VkSdk\Audio\AudioReorder($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioRestore
     */
    public function restore()
    {
        return new \VkSdk\Audio\AudioRestore($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioSave
     */
    public function save()
    {
        return new \VkSdk\Audio\AudioSave($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioSearch
     */
    public function search()
    {
        return new \VkSdk\Audio\AudioSearch($this->token);
    }

    /**
     * @return \VkSdk\Audio\AudioSetBroadcast
     */
    public function setBroadcast()
    {
        return new \VkSdk\Audio\AudioSetBroadcast($this->token);
    }
}
