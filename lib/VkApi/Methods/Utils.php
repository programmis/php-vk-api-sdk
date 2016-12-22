<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Utils
 *
 * @package VkApi\Methods
 */
class Utils
{
    use ApiTrait;

    /**
     * @return \VkSdk\Utils\UtilsCheckLink
     */
    public function checkLink()
    {
        return new \VkSdk\Utils\UtilsCheckLink($this->token);
    }

    /**
     * @return \VkSdk\Utils\UtilsGetServerTime
     */
    public function getServerTime()
    {
        return new \VkSdk\Utils\UtilsGetServerTime($this->token);
    }

    /**
     * @return \VkSdk\Utils\UtilsResolveScreenName
     */
    public function resolveScreenName()
    {
        return new \VkSdk\Utils\UtilsResolveScreenName($this->token);
    }
}
