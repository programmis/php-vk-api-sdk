<?php
namespace VkSdk\Ads\Includes;

/**
 * Class LinkStatus
 *
 * @package VkSdk\Ads\Includes
 */
class LinkStatus
{

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $redirect_url;

    /**
     * @var string
     */
    public $status;

    /**
     * Reject reason
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
     * URL
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirect_url;
    }

    /**
     * @return $this
     *
     * @param string $redirect_url
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->redirect_url = $redirect_url;

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
