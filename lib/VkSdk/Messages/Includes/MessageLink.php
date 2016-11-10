<?php

namespace VkSdk\Messages\Includes;

use lib\AutoFillObject;

/**
 * Class MessageLink
 * @package VkSdk\Messages\Includes
 */
class MessageLink
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $image_src;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $url;

    /**
     * Link description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return $this
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * URL of the preview image
     *
     * @return string
     */
    public function getImageSrc()
    {
        return $this->image_src;
    }

    /**
     * @return $this
     *
     * @param string $image_src
     */
    public function setImageSrc($image_src)
    {
        $this->image_src = $image_src;

        return $this;
    }

    /**
     * Link title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Link URL
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
