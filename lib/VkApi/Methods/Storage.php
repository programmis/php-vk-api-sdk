<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Storage
 *
 * @package VkApi\Methods
 */
class Storage
{
    use ApiTrait;

    /**
     * @return \VkSdk\Storage\StorageGet
     */
    public function get()
    {
        return new \VkSdk\Storage\StorageGet($this->token);
    }

    /**
     * @return \VkSdk\Storage\StorageGetKeys
     */
    public function getKeys()
    {
        return new \VkSdk\Storage\StorageGetKeys($this->token);
    }

    /**
     * @return \VkSdk\Storage\StorageSet
     */
    public function set()
    {
        return new \VkSdk\Storage\StorageSet($this->token);
    }
}
