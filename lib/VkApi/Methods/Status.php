<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Status
 *
 * @package VkApi\Methods
 */
class Status
{
    use ApiTrait;

    /**
     * @return \VkSdk\Status\StatusGet
     */
    public function get()
    {
        return new \VkSdk\Status\StatusGet($this->token);
    }

    /**
     * @return \VkSdk\Status\StatusSet
     */
    public function set()
    {
        return new \VkSdk\Status\StatusSet($this->token);
    }
}
