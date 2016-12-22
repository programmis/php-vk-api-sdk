<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Apps
 *
 * @package VkApi\Methods
 */
class Apps
{
    use ApiTrait;

    /**
     * @return \VkSdk\Apps\AppsDeleteAppRequests
     */
    public function deleteAppRequests()
    {
        return new \VkSdk\Apps\AppsDeleteAppRequests($this->token);
    }

    /**
     * @return \VkSdk\Apps\AppsGet
     */
    public function get()
    {
        return new \VkSdk\Apps\AppsGet($this->token);
    }

    /**
     * @return \VkSdk\Apps\AppsGetCatalog
     */
    public function getCatalog()
    {
        return new \VkSdk\Apps\AppsGetCatalog($this->token);
    }

    /**
     * @return \VkSdk\Apps\AppsGetFriendsList
     */
    public function getFriendsList()
    {
        return new \VkSdk\Apps\AppsGetFriendsList($this->token);
    }

    /**
     * @return \VkSdk\Apps\AppsGetLeaderboard
     */
    public function getLeaderboard()
    {
        return new \VkSdk\Apps\AppsGetLeaderboard($this->token);
    }

    /**
     * @return \VkSdk\Apps\AppsGetScore
     */
    public function getScore()
    {
        return new \VkSdk\Apps\AppsGetScore($this->token);
    }

    /**
     * @return \VkSdk\Apps\AppsSendRequest
     */
    public function sendRequest()
    {
        return new \VkSdk\Apps\AppsSendRequest($this->token);
    }
}
