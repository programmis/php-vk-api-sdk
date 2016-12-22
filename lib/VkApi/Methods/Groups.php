<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Groups
 *
 * @package VkApi\Methods
 */
class Groups
{
    use ApiTrait;

    /**
     * @return \VkSdk\Groups\GroupsAddLink
     */
    public function addLink()
    {
        return new \VkSdk\Groups\GroupsAddLink($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsApproveRequest
     */
    public function approveRequest()
    {
        return new \VkSdk\Groups\GroupsApproveRequest($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsBanUser
     */
    public function banUser()
    {
        return new \VkSdk\Groups\GroupsBanUser($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsCreate
     */
    public function create()
    {
        return new \VkSdk\Groups\GroupsCreate($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsDeleteLink
     */
    public function deleteLink()
    {
        return new \VkSdk\Groups\GroupsDeleteLink($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsEdit
     */
    public function edit()
    {
        return new \VkSdk\Groups\GroupsEdit($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsEditLink
     */
    public function editLink()
    {
        return new \VkSdk\Groups\GroupsEditLink($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsEditManager
     */
    public function editManager()
    {
        return new \VkSdk\Groups\GroupsEditManager($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsEditPlace
     */
    public function editPlace()
    {
        return new \VkSdk\Groups\GroupsEditPlace($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGet
     */
    public function get()
    {
        return new \VkSdk\Groups\GroupsGet($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGetBanned
     */
    public function getBanned()
    {
        return new \VkSdk\Groups\GroupsGetBanned($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGetById
     */
    public function getById()
    {
        return new \VkSdk\Groups\GroupsGetById($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGetCallbackConfirmationCode
     */
    public function getCallbackConfirmationCode()
    {
        return new \VkSdk\Groups\GroupsGetCallbackConfirmationCode($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGetCallbackServerSettings
     */
    public function getCallbackServerSettings()
    {
        return new \VkSdk\Groups\GroupsGetCallbackServerSettings($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGetCallbackSettings
     */
    public function getCallbackSettings()
    {
        return new \VkSdk\Groups\GroupsGetCallbackSettings($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGetCatalog
     */
    public function getCatalog()
    {
        return new \VkSdk\Groups\GroupsGetCatalog($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGetCatalogInfo
     */
    public function getCatalogInfo()
    {
        return new \VkSdk\Groups\GroupsGetCatalogInfo($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGetInvitedUsers
     */
    public function getInvitedUsers()
    {
        return new \VkSdk\Groups\GroupsGetInvitedUsers($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGetInvites
     */
    public function getInvites()
    {
        return new \VkSdk\Groups\GroupsGetInvites($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGetMembers
     */
    public function getMembers()
    {
        return new \VkSdk\Groups\GroupsGetMembers($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGetRequests
     */
    public function getRequests()
    {
        return new \VkSdk\Groups\GroupsGetRequests($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsGetSettings
     */
    public function getSettings()
    {
        return new \VkSdk\Groups\GroupsGetSettings($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsInvite
     */
    public function invite()
    {
        return new \VkSdk\Groups\GroupsInvite($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsIsMember
     */
    public function isMember()
    {
        return new \VkSdk\Groups\GroupsIsMember($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsJoin
     */
    public function join()
    {
        return new \VkSdk\Groups\GroupsJoin($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsLeave
     */
    public function leave()
    {
        return new \VkSdk\Groups\GroupsLeave($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsRemoveUser
     */
    public function removeUser()
    {
        return new \VkSdk\Groups\GroupsRemoveUser($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsReorderLink
     */
    public function reorderLink()
    {
        return new \VkSdk\Groups\GroupsReorderLink($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsSearch
     */
    public function search()
    {
        return new \VkSdk\Groups\GroupsSearch($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsSetCallbackServer
     */
    public function setCallbackServer()
    {
        return new \VkSdk\Groups\GroupsSetCallbackServer($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsSetCallbackServerSettings
     */
    public function setCallbackServerSettings()
    {
        return new \VkSdk\Groups\GroupsSetCallbackServerSettings($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsSetCallbackSettings
     */
    public function setCallbackSettings()
    {
        return new \VkSdk\Groups\GroupsSetCallbackSettings($this->token);
    }

    /**
     * @return \VkSdk\Groups\GroupsUnbanUser
     */
    public function unbanUser()
    {
        return new \VkSdk\Groups\GroupsUnbanUser($this->token);
    }
}
