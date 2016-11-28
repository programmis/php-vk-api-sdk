<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 28.11.16
 * Time: 20:36
 */

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Users
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
}
