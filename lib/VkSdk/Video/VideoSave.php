<?php

namespace VkSdk\Video;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Video\Includes\SaveResult;

/**
 * Returns a server address (required for upload) and video data.
 * Class VideoSave
 * @package VkSdk\Video
 */
class VideoSave extends Request
{

    use AutoFillObject;

    /**
     * @var SaveResult
     */
    private $response;

    /**
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
     * {@inheritdoc}
     */
    public function doRequest()
    {
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
        return "video.save";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Video\Includes\SaveResult',
        ];
    }

    /**
     * ID of the album to which the saved video will be added.
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
     * Description of the video.
     *
     * @return $this
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->vkarg_description = $description;

        return $this;
    }

    /**
     * ID of the community in which the video will be saved. By default, the current user's page.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * '1' — to designate the video as private (send it via a private message); the video will not appear on the user's video list and will not be available by ID for other users; '0' — not to designate the video as private
     *
     * @return $this
     *
     * @param boolean $is_private
     */
    public function setIsPrivate($is_private)
    {
        $this->vkarg_is_private = $is_private;

        return $this;
    }

    /**
     * URL for embedding the video from an external website.
     *
     * @return $this
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->vkarg_link = $link;

        return $this;
    }

    /**
     * Name of the video.
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
     * '1' — to post the saved video on a user's wall; '0' — not to post the saved video on a user's wall
     *
     * @return $this
     *
     * @param boolean $wallpost
     */
    public function setWallpost($wallpost)
    {
        $this->vkarg_wallpost = $wallpost;

        return $this;
    }
}
