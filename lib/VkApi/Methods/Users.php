<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Users
 *
 * @package VkApi\Methods
 */
class Users
{
    use ApiTrait;

    /**
     * @return \VkSdk\Users\UsersGet
     */
    public function get()
    {
        return new \VkSdk\Users\UsersGet($this->token);
    }

    /**
     * @return \VkSdk\Users\UsersGetFollowers
     */
    public function getFollowers()
    {
        return new \VkSdk\Users\UsersGetFollowers($this->token);
    }

    /**
     * @return \VkSdk\Users\UsersGetNearby
     */
    public function getNearby()
    {
        return new \VkSdk\Users\UsersGetNearby($this->token);
    }

    /**
     * @return \VkSdk\Users\UsersGetSubscriptions
     */
    public function getSubscriptions()
    {
        return new \VkSdk\Users\UsersGetSubscriptions($this->token);
    }

    /**
     * @return \VkSdk\Users\UsersIsAppUser
     */
    public function isAppUser()
    {
        return new \VkSdk\Users\UsersIsAppUser($this->token);
    }

    /**
     * @return \VkSdk\Users\UsersReport
     */
    public function report()
    {
        return new \VkSdk\Users\UsersReport($this->token);
    }

    /**
     * @return \VkSdk\Users\UsersSearch
     */
    public function search()
    {
        return new \VkSdk\Users\UsersSearch($this->token);
    }
}
