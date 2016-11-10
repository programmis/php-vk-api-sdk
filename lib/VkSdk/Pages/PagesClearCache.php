<?php

namespace VkSdk\Pages;

use VkSdk\Includes\Request;

/**
 * Allows to clear the cache of particular 'external' pages which may be attached to VK posts.
 * Class PagesClearCache
 * @package VkSdk\Pages
 */
class PagesClearCache extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["url"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "pages.clearCache";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Address of the page where you need to refesh the cached version
     *
     * @return $this
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->vkarg_url = $url;

        return $this;
    }
}
