<?php

namespace VkSdk\Video;

use VkSdk\Includes\Request;

/**
 * Edits information about a video on a user or community page.
 *
 * Class VideoEdit
 * @package VkSdk\Video
 */
class VideoEdit extends Request
{
    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * Privacy settings for comments in a .
     *
     * @return $this
     *
     * @param string $privacy_comment
     */
    public function addPrivacyComment($privacy_comment)
    {
        $this->vkarg_privacy_comment[] = $privacy_comment;

        return $this;
    }

    /**
     * Privacy settings in a .; Privacy setting is available for videos uploaded to own profile by user.
     *
     * @return $this
     *
     * @param string $privacy_view
     */
    public function addPrivacyView($privacy_view)
    {
        $this->vkarg_privacy_view[] = $privacy_view;

        return $this;
    }

    /**
     * result in $this->getResponse();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["video_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->response = $json->response;

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
        return "video.edit";
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
     * New video description.
     *
     * @return $this
     *
     * @param string $desc
     */
    public function setDesc($desc)
    {
        $this->vkarg_desc = $desc;

        return $this;
    }

    /**
     * New video title.
     *
     * @return $this
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->vkarg_name = $name;

        return $this;
    }

    /**
     * Disable comments for the group video.
     *
     * @return $this
     *
     * @param boolean $no_comments
     */
    public function setNoComments($no_comments)
    {
        $this->vkarg_no_comments = $no_comments;

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
     * Privacy settings for comments in a .
     *
     * @return $this
     *
     * @param array $privacy_comment
     */
    public function setPrivacyComment(array $privacy_comment)
    {
        $this->vkarg_privacy_comment = $privacy_comment;

        return $this;
    }

    /**
     * Privacy settings in a .; Privacy setting is available for videos uploaded to own profile by user.
     *
     * @return $this
     *
     * @param array $privacy_view
     */
    public function setPrivacyView(array $privacy_view)
    {
        $this->vkarg_privacy_view = $privacy_view;

        return $this;
    }

    /**
     * '1' — to repeat the playback of the video; '0' — to play the video once;
     *
     * @return $this
     *
     * @param boolean $repeat
     */
    public function setRepeat($repeat)
    {
        $this->vkarg_repeat = $repeat;

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
