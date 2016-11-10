<?php

namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Allow to set notifications settings for group.
 * Class GroupsSetCallbackSettings
 * @package VkSdk\Groups
 */
class GroupsSetCallbackSettings extends Request
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
        $this->setRequiredParams(["group_id"]);

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
        return "groups.setCallbackSettings";
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
     * New audios notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $audio_new
     */
    public function setAudioNew($audio_new)
    {
        $this->vkarg_audio_new = $audio_new;

        return $this;
    }

    /**
     * Board posts deleted notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $board_post_delete
     */
    public function setBoardPostDelete($board_post_delete)
    {
        $this->vkarg_board_post_delete = $board_post_delete;

        return $this;
    }

    /**
     * Board posts edited notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $board_post_edit
     */
    public function setBoardPostEdit($board_post_edit)
    {
        $this->vkarg_board_post_edit = $board_post_edit;

        return $this;
    }

    /**
     * New board posts notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $board_post_new
     */
    public function setBoardPostNew($board_post_new)
    {
        $this->vkarg_board_post_new = $board_post_new;

        return $this;
    }

    /**
     * Board posts restored notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $board_post_restore
     */
    public function setBoardPostRestore($board_post_restore)
    {
        $this->vkarg_board_post_restore = $board_post_restore;

        return $this;
    }

    /**
     * Community ID.
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
     * Joined community notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $group_join
     */
    public function setGroupJoin($group_join)
    {
        $this->vkarg_group_join = $group_join;

        return $this;
    }

    /**
     * Left community notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $group_leave
     */
    public function setGroupLeave($group_leave)
    {
        $this->vkarg_group_leave = $group_leave;

        return $this;
    }

    /**
     * New comment to market item notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $market_comment_new
     */
    public function setMarketCommentNew($market_comment_new)
    {
        $this->vkarg_market_comment_new = $market_comment_new;

        return $this;
    }

    /**
     * Allowed messages notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $message_allow
     */
    public function setMessageAllow($message_allow)
    {
        $this->vkarg_message_allow = $message_allow;

        return $this;
    }

    /**
     * Denied messages notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $message_deny
     */
    public function setMessageDeny($message_deny)
    {
        $this->vkarg_message_deny = $message_deny;

        return $this;
    }

    /**
     * New messages notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $message_new
     */
    public function setMessageNew($message_new)
    {
        $this->vkarg_message_new = $message_new;

        return $this;
    }

    /**
     * New comment to photo notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $photo_comment_new
     */
    public function setPhotoCommentNew($photo_comment_new)
    {
        $this->vkarg_photo_comment_new = $photo_comment_new;

        return $this;
    }

    /**
     * New photos notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $photo_new
     */
    public function setPhotoNew($photo_new)
    {
        $this->vkarg_photo_new = $photo_new;

        return $this;
    }

    /**
     * New comment to video notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $video_comment_new
     */
    public function setVideoCommentNew($video_comment_new)
    {
        $this->vkarg_video_comment_new = $video_comment_new;

        return $this;
    }

    /**
     * New videos notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $video_new
     */
    public function setVideoNew($video_new)
    {
        $this->vkarg_video_new = $video_new;

        return $this;
    }

    /**
     * New wall posts notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $wall_post_new
     */
    public function setWallPostNew($wall_post_new)
    {
        $this->vkarg_wall_post_new = $wall_post_new;

        return $this;
    }

    /**
     * Wall replies edited notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $wall_reply_edit
     */
    public function setWallReplyEdit($wall_reply_edit)
    {
        $this->vkarg_wall_reply_edit = $wall_reply_edit;

        return $this;
    }

    /**
     * New wall replies notifications ('0' — disabled, '1' — enabled).
     *
     * @return $this
     *
     * @param boolean $wall_reply_new
     */
    public function setWallReplyNew($wall_reply_new)
    {
        $this->vkarg_wall_reply_new = $wall_reply_new;

        return $this;
    }
}
