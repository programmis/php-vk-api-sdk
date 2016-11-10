<?php

namespace VkSdk\Utils\Includes;

use lib\AutoFillObject;

/**
 * Class LinkChecked
 * @package VkSdk\Utils\Includes
 */
class LinkChecked
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $status;

    /**
     * Link URL
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return $this
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Link status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return $this
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
