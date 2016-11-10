<?php
namespace VkSdk\Utils\Includes;

/**
 * Class LinkChecked
 *
 * @package VkSdk\Utils\Includes
 */
class LinkChecked
{

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $status;

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
