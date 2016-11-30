<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Widgets
 *
 * @package VkApi\Methods
 */
class Widgets
{
    use ApiTrait;

    /**
     * @return \VkSdk\Widgets\WidgetsGetComments
     */
    public function getComments()
    {
        return new \VkSdk\Widgets\WidgetsGetComments($this->token);
    }

    /**
     * @return \VkSdk\Widgets\WidgetsGetPages
     */
    public function getPages()
    {
        return new \VkSdk\Widgets\WidgetsGetPages($this->token);
    }
}
