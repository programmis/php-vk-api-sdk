<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Pages
 *
 * @package VkApi\Methods
 */
class Pages
{
    use ApiTrait;

    /**
     * @return \VkSdk\Pages\PagesClearCache
     */
    public function clearCache()
    {
        return new \VkSdk\Pages\PagesClearCache($this->token);
    }

    /**
     * @return \VkSdk\Pages\PagesGet
     */
    public function get()
    {
        return new \VkSdk\Pages\PagesGet($this->token);
    }

    /**
     * @return \VkSdk\Pages\PagesGetHistory
     */
    public function getHistory()
    {
        return new \VkSdk\Pages\PagesGetHistory($this->token);
    }

    /**
     * @return \VkSdk\Pages\PagesGetTitles
     */
    public function getTitles()
    {
        return new \VkSdk\Pages\PagesGetTitles($this->token);
    }

    /**
     * @return \VkSdk\Pages\PagesGetVersion
     */
    public function getVersion()
    {
        return new \VkSdk\Pages\PagesGetVersion($this->token);
    }

    /**
     * @return \VkSdk\Pages\PagesParseWiki
     */
    public function parseWiki()
    {
        return new \VkSdk\Pages\PagesParseWiki($this->token);
    }

    /**
     * @return \VkSdk\Pages\PagesSave
     */
    public function save()
    {
        return new \VkSdk\Pages\PagesSave($this->token);
    }

    /**
     * @return \VkSdk\Pages\PagesSaveAccess
     */
    public function saveAccess()
    {
        return new \VkSdk\Pages\PagesSaveAccess($this->token);
    }
}
