<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Fave
 *
 * @package VkApi\Methods
 */
class Fave
{
    use ApiTrait;

    /**
     * @return \VkSdk\Fave\FaveAddGroup
     */
    public function addGroup()
    {
        return new \VkSdk\Fave\FaveAddGroup($this->token);
    }

    /**
     * @return \VkSdk\Fave\FaveAddLink
     */
    public function addLink()
    {
        return new \VkSdk\Fave\FaveAddLink($this->token);
    }

    /**
     * @return \VkSdk\Fave\FaveAddUser
     */
    public function addUser()
    {
        return new \VkSdk\Fave\FaveAddUser($this->token);
    }

    /**
     * @return \VkSdk\Fave\FaveGetLinks
     */
    public function getLinks()
    {
        return new \VkSdk\Fave\FaveGetLinks($this->token);
    }

    /**
     * @return \VkSdk\Fave\FaveGetMarketItems
     */
    public function getMarketItems()
    {
        return new \VkSdk\Fave\FaveGetMarketItems($this->token);
    }

    /**
     * @return \VkSdk\Fave\FaveGetPhotos
     */
    public function getPhotos()
    {
        return new \VkSdk\Fave\FaveGetPhotos($this->token);
    }

    /**
     * @return \VkSdk\Fave\FaveGetPosts
     */
    public function getPosts()
    {
        return new \VkSdk\Fave\FaveGetPosts($this->token);
    }

    /**
     * @return \VkSdk\Fave\FaveGetUsers
     */
    public function getUsers()
    {
        return new \VkSdk\Fave\FaveGetUsers($this->token);
    }

    /**
     * @return \VkSdk\Fave\FaveGetVideos
     */
    public function getVideos()
    {
        return new \VkSdk\Fave\FaveGetVideos($this->token);
    }

    /**
     * @return \VkSdk\Fave\FaveRemoveGroup
     */
    public function removeGroup()
    {
        return new \VkSdk\Fave\FaveRemoveGroup($this->token);
    }

    /**
     * @return \VkSdk\Fave\FaveRemoveLink
     */
    public function removeLink()
    {
        return new \VkSdk\Fave\FaveRemoveLink($this->token);
    }

    /**
     * @return \VkSdk\Fave\FaveRemoveUser
     */
    public function removeUser()
    {
        return new \VkSdk\Fave\FaveRemoveUser($this->token);
    }
}
