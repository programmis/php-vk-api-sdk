<?php

namespace VkSdk\Users\Includes;

/**
 * Class Exports
 * @package VkSdk\Users\Includes
 */
class Exports
{
    /**
     * @var integer
     */
    public $facebook;

    /**
     * @var integer
     */
    public $livejournal;

    /**
     * @var integer
     */
    public $twitter;

    /**
     * @return integer
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @return integer
     */
    public function getLivejournal()
    {
        return $this->livejournal;
    }

    /**
     * @return integer
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @return $this
     *
     * @param integer $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $livejournal
     */
    public function setLivejournal($livejournal)
    {
        $this->livejournal = $livejournal;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $twitter
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }
}
