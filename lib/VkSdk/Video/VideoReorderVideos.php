<?php

namespace VkSdk\Video;

use VkSdk\Includes\Request;

/**
 * Reorders the video in the video album.
 * Class VideoReorderVideos
 * @package VkSdk\Video
 */
class VideoReorderVideos extends Request
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
        $this->setRequiredParams(["owner_id", "video_id"]);

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
        return "video.reorderVideos";
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
     * ID of the user or community that owns the video after which the photo in question shall be placed.
     *
     * @return $this
     *
     * @param integer $after_owner_id
     */
    public function setAfterOwnerId($after_owner_id)
    {
        $this->vkarg_after_owner_id = $after_owner_id;

        return $this;
    }

    /**
     * ID of the video after which the photo in question shall be placed.
     *
     * @return $this
     *
     * @param integer $after_video_id
     */
    public function setAfterVideoId($after_video_id)
    {
        $this->vkarg_after_video_id = $after_video_id;

        return $this;
    }

    /**
     * ID of the video album.
     *
     * @return $this
     *
     * @param integer $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->vkarg_album_id = $album_id;

        return $this;
    }

    /**
     * ID of the user or community that owns the video before which the video in question shall be placed.
     *
     * @return $this
     *
     * @param integer $before_owner_id
     */
    public function setBeforeOwnerId($before_owner_id)
    {
        $this->vkarg_before_owner_id = $before_owner_id;

        return $this;
    }

    /**
     * ID of the video before which the video in question shall be placed.
     *
     * @return $this
     *
     * @param integer $before_video_id
     */
    public function setBeforeVideoId($before_video_id)
    {
        $this->vkarg_before_video_id = $before_video_id;

        return $this;
    }

    /**
     * ID of the user or community that owns the video.
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }

    /**
     * ID of the user or community that owns the album with videos.
     *
     * @return $this
     *
     * @param integer $target_id
     */
    public function setTargetId($target_id)
    {
        $this->vkarg_target_id = $target_id;

        return $this;
    }

    /**
     * ID of the video.
     *
     * @return $this
     *
     * @param integer $video_id
     */
    public function setVideoId($video_id)
    {
        $this->vkarg_video_id = $video_id;

        return $this;
    }
}
