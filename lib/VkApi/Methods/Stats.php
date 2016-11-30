<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Stats
 *
 * @package VkApi\Methods
 */
class Stats
{
    use ApiTrait;

    /**
     * @return \VkSdk\Stats\StatsGet
     */
    public function get()
    {
        return new \VkSdk\Stats\StatsGet($this->token);
    }

    /**
     * @return \VkSdk\Stats\StatsGetPostReach
     */
    public function getPostReach()
    {
        return new \VkSdk\Stats\StatsGetPostReach($this->token);
    }

    /**
     * @return \VkSdk\Stats\StatsTrackVisitor
     */
    public function trackVisitor()
    {
        return new \VkSdk\Stats\StatsTrackVisitor($this->token);
    }
}
