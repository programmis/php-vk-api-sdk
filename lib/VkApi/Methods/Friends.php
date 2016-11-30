<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Friends
 *
 * @package VkApi\Methods
 */
class Friends
{
    use ApiTrait;

    /**
     * @return \VkSdk\Friends\FriendsAdd
     */
    public function add()
    {
        return new \VkSdk\Friends\FriendsAdd($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsAddList
     */
    public function addList()
    {
        return new \VkSdk\Friends\FriendsAddList($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsAreFriends
     */
    public function areFriends()
    {
        return new \VkSdk\Friends\FriendsAreFriends($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsDelete
     */
    public function delete()
    {
        return new \VkSdk\Friends\FriendsDelete($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsDeleteAllRequests
     */
    public function deleteAllRequests()
    {
        return new \VkSdk\Friends\FriendsDeleteAllRequests($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsDeleteList
     */
    public function deleteList()
    {
        return new \VkSdk\Friends\FriendsDeleteList($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsEdit
     */
    public function edit()
    {
        return new \VkSdk\Friends\FriendsEdit($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsEditList
     */
    public function editList()
    {
        return new \VkSdk\Friends\FriendsEditList($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsGet
     */
    public function get()
    {
        return new \VkSdk\Friends\FriendsGet($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsGetAppUsers
     */
    public function getAppUsers()
    {
        return new \VkSdk\Friends\FriendsGetAppUsers($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsGetAvailableForCall
     */
    public function getAvailableForCall()
    {
        return new \VkSdk\Friends\FriendsGetAvailableForCall($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsGetByPhones
     */
    public function getByPhones()
    {
        return new \VkSdk\Friends\FriendsGetByPhones($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsGetLists
     */
    public function getLists()
    {
        return new \VkSdk\Friends\FriendsGetLists($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsGetMutual
     */
    public function getMutual()
    {
        return new \VkSdk\Friends\FriendsGetMutual($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsGetOnline
     */
    public function getOnline()
    {
        return new \VkSdk\Friends\FriendsGetOnline($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsGetRecent
     */
    public function getRecent()
    {
        return new \VkSdk\Friends\FriendsGetRecent($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsGetRequests
     */
    public function getRequests()
    {
        return new \VkSdk\Friends\FriendsGetRequests($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsGetSuggestions
     */
    public function getSuggestions()
    {
        return new \VkSdk\Friends\FriendsGetSuggestions($this->token);
    }

    /**
     * @return \VkSdk\Friends\FriendsSearch
     */
    public function search()
    {
        return new \VkSdk\Friends\FriendsSearch($this->token);
    }
}
