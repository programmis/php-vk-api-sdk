<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Newsfeed
 *
 * @package VkApi\Methods
 */
class Newsfeed
{
    use ApiTrait;

    /**
     * @return \VkSdk\Newsfeed\NewsfeedAddBan
     */
    public function addBan()
    {
        return new \VkSdk\Newsfeed\NewsfeedAddBan($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedDeleteBan
     */
    public function deleteBan()
    {
        return new \VkSdk\Newsfeed\NewsfeedDeleteBan($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedDeleteList
     */
    public function deleteList()
    {
        return new \VkSdk\Newsfeed\NewsfeedDeleteList($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedGet
     */
    public function get()
    {
        return new \VkSdk\Newsfeed\NewsfeedGet($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedGetBanned
     */
    public function getBanned()
    {
        return new \VkSdk\Newsfeed\NewsfeedGetBanned($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedGetComments
     */
    public function getComments()
    {
        return new \VkSdk\Newsfeed\NewsfeedGetComments($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedGetLists
     */
    public function getLists()
    {
        return new \VkSdk\Newsfeed\NewsfeedGetLists($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedGetMentions
     */
    public function getMentions()
    {
        return new \VkSdk\Newsfeed\NewsfeedGetMentions($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedGetRecommended
     */
    public function getRecommended()
    {
        return new \VkSdk\Newsfeed\NewsfeedGetRecommended($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedGetSuggestedSources
     */
    public function getSuggestedSources()
    {
        return new \VkSdk\Newsfeed\NewsfeedGetSuggestedSources($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedIgnoreItem
     */
    public function ignoreItem()
    {
        return new \VkSdk\Newsfeed\NewsfeedIgnoreItem($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedSaveList
     */
    public function saveList()
    {
        return new \VkSdk\Newsfeed\NewsfeedSaveList($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedSearch
     */
    public function search()
    {
        return new \VkSdk\Newsfeed\NewsfeedSearch($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedUnignoreItem
     */
    public function unignoreItem()
    {
        return new \VkSdk\Newsfeed\NewsfeedUnignoreItem($this->token);
    }

    /**
     * @return \VkSdk\Newsfeed\NewsfeedUnsubscribe
     */
    public function unsubscribe()
    {
        return new \VkSdk\Newsfeed\NewsfeedUnsubscribe($this->token);
    }
}
