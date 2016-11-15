<?php

namespace VkSdk\Base;

/**
 * Class LinkButtonAction
 * @package VkSdk\Base
 */
class LinkButtonAction
{
    /**
     * See constants of class LinkButtonActionType
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;

    /**
     * Action type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Action URL
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
