<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Notifications
 *
 * @package VkApi\Methods
 */
class Notifications
{
    use ApiTrait;

    /**
     * @return \VkSdk\Notifications\NotificationsGet
     */
    public function get()
    {
        return new \VkSdk\Notifications\NotificationsGet($this->token);
    }

    /**
     * @return \VkSdk\Notifications\NotificationsMarkAsViewed
     */
    public function markAsViewed()
    {
        return new \VkSdk\Notifications\NotificationsMarkAsViewed($this->token);
    }
}
