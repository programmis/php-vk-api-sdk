<?php

namespace VkSdk\Video;

use VkSdk\Includes\Request;

/**
 * Adds a video to a user or community page.
 * Class VideoAdd
 * @package VkSdk\Video
 */
class VideoAdd extends Request
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
        $this->setRequiredParams(["video_id", "owner_id"]);

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
        return "video.add";
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
     * ID of the user or community that owns the video.; Use a negative value to designate a community ID.
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
     * identifier of a user or community to add a video to.; Use a negative value to designate a community ID.
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
     * Video ID.
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
