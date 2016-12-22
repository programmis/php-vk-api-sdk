<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Messages
 *
 * @package VkApi\Methods
 */
class Messages
{
    use ApiTrait;

    /**
     * @return \VkSdk\Messages\MessagesAddChatUser
     */
    public function addChatUser()
    {
        return new \VkSdk\Messages\MessagesAddChatUser($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesAllowMessagesFromCommunity
     */
    public function allowMessagesFromCommunity()
    {
        return new \VkSdk\Messages\MessagesAllowMessagesFromCommunity($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesCreateChat
     */
    public function createChat()
    {
        return new \VkSdk\Messages\MessagesCreateChat($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesDelete
     */
    public function delete()
    {
        return new \VkSdk\Messages\MessagesDelete($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesDeleteChatPhoto
     */
    public function deleteChatPhoto()
    {
        return new \VkSdk\Messages\MessagesDeleteChatPhoto($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesDeleteDialog
     */
    public function deleteDialog()
    {
        return new \VkSdk\Messages\MessagesDeleteDialog($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesDenyMessagesFromCommunity
     */
    public function denyMessagesFromCommunity()
    {
        return new \VkSdk\Messages\MessagesDenyMessagesFromCommunity($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesEditChat
     */
    public function editChat()
    {
        return new \VkSdk\Messages\MessagesEditChat($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesGet
     */
    public function get()
    {
        return new \VkSdk\Messages\MessagesGet($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesGetById
     */
    public function getById()
    {
        return new \VkSdk\Messages\MessagesGetById($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesGetChat
     */
    public function getChat()
    {
        return new \VkSdk\Messages\MessagesGetChat($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesGetChatUsers
     */
    public function getChatUsers()
    {
        return new \VkSdk\Messages\MessagesGetChatUsers($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesGetDialogs
     */
    public function getDialogs()
    {
        return new \VkSdk\Messages\MessagesGetDialogs($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesGetHistory
     */
    public function getHistory()
    {
        return new \VkSdk\Messages\MessagesGetHistory($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesGetHistoryAttachments
     */
    public function getHistoryAttachments()
    {
        return new \VkSdk\Messages\MessagesGetHistoryAttachments($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesGetLastActivity
     */
    public function getLastActivity()
    {
        return new \VkSdk\Messages\MessagesGetLastActivity($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesGetLongPollHistory
     */
    public function getLongPollHistory()
    {
        return new \VkSdk\Messages\MessagesGetLongPollHistory($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesGetLongPollServer
     */
    public function getLongPollServer()
    {
        return new \VkSdk\Messages\MessagesGetLongPollServer($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesIsMessagesFromGroupAllowed
     */
    public function isMessagesFromGroupAllowed()
    {
        return new \VkSdk\Messages\MessagesIsMessagesFromGroupAllowed($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesMarkAsImportant
     */
    public function markAsImportant()
    {
        return new \VkSdk\Messages\MessagesMarkAsImportant($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesMarkAsRead
     */
    public function markAsRead()
    {
        return new \VkSdk\Messages\MessagesMarkAsRead($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesRemoveChatUser
     */
    public function removeChatUser()
    {
        return new \VkSdk\Messages\MessagesRemoveChatUser($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesRestore
     */
    public function restore()
    {
        return new \VkSdk\Messages\MessagesRestore($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesSearch
     */
    public function search()
    {
        return new \VkSdk\Messages\MessagesSearch($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesSearchDialogs
     */
    public function searchDialogs()
    {
        return new \VkSdk\Messages\MessagesSearchDialogs($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesSend
     */
    public function send()
    {
        return new \VkSdk\Messages\MessagesSend($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesSetActivity
     */
    public function setActivity()
    {
        return new \VkSdk\Messages\MessagesSetActivity($this->token);
    }

    /**
     * @return \VkSdk\Messages\MessagesSetChatPhoto
     */
    public function setChatPhoto()
    {
        return new \VkSdk\Messages\MessagesSetChatPhoto($this->token);
    }
}
