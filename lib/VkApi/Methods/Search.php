<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Search
 * @package VkApi\Methods
 */
class Search
{
    use ApiTrait;

    /**
     * @return \VkSdk\Search\SearchGetHints
     */
    public function getHints()
    {
        return new \VkSdk\Search\SearchGetHints($this->token);
    }
}
