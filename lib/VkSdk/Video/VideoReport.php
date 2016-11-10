<?php

namespace VkSdk\Video;

use VkSdk\Includes\Request;

/**
 * Reports (submits a complaint about) a video.
 * Class VideoReport
 * @package VkSdk\Video
 */
class VideoReport extends Request
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
        return "video.report";
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
     * Comment describing the complaint.
     *
     * @return $this
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->vkarg_comment = $comment;

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
     * Reason for the complaint:; '0' – spam; '1' – child pornography; '2' – extremism; '3' – violence; '4' – drug propaganda; '5' – adult material; '6' – insult; abuse
     *
     * @return $this
     *
     * @param integer $reason
     */
    public function setReason($reason)
    {
        $this->vkarg_reason = $reason;

        return $this;
    }

    /**
     * (If the video was found in search results.) Search query string.
     *
     * @return $this
     *
     * @param string $search_query
     */
    public function setSearchQuery($search_query)
    {
        $this->vkarg_search_query = $search_query;

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
