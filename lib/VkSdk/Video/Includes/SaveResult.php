<?php

namespace VkSdk\Video\Includes;

use lib\AutoFillObject;

/**
 * Class SaveResult
 * @package VkSdk\Video\Includes
 */
class SaveResult
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $upload_url;

    /**
     * @var integer
     */
    private $video_id;

    /**
     * Video description
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
     * Video owner ID
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    /**
     * Video title
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
     * URL for the video uploading
     *
     * @return string
     */
    public function getUploadUrl()
    {
        return $this->upload_url;
    }

    /**
     * @return $this
     *
     * @param string $upload_url
     */
    public function setUploadUrl($upload_url)
    {
        $this->upload_url = $upload_url;

        return $this;
    }

    /**
     * Video ID
     *
     * @return integer
     */
    public function getVideoId()
    {
        return $this->video_id;
    }

    /**
     * @return $this
     *
     * @param integer $video_id
     */
    public function setVideoId($video_id)
    {
        $this->video_id = $video_id;

        return $this;
    }
}
