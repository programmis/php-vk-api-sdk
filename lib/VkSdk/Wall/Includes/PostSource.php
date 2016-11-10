<?php
namespace VkSdk\Wall\Includes;

/**
 * Class PostSource
 *
 * @package VkSdk\Wall\Includes
 */
class PostSource
{

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;

    /**
     * Additional data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return $this
     *
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Platform name
     *
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @return $this
     *
     * @param string $platform
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Type of post source
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
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
     * URL to an external site used to publish the post
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
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
