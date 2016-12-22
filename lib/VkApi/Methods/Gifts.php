<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Gifts
 * @package VkApi\Methods
 */
class Gifts
{
    use ApiTrait;

    /**
     * @return \VkSdk\Gifts\GiftsGet
     */
    public function get()
    {
        return new \VkSdk\Gifts\GiftsGet($this->token);
    }
}
