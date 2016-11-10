<?php

namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Returns  notifications settings.
 * Class GroupsGetCallbackSettings
 * @package VkSdk\Groups
 */
class GroupsGetCallbackSettings extends Request
{

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $audio_new;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $board_post_delete;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $board_post_edit;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $board_post_new;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $board_post_restore;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $group_join;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $group_leave;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $market_comment_new;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $message_allow;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $message_deny;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $message_new;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $photo_comment_new;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $photo_new;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $video_comment_new;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $video_new;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $wall_post_new;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $wall_reply_edit;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $wall_reply_new;

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
     * Whether notifications about new audios enabled
     *
     * @return integer
     */
    public function getAudioNew()
    {
        return $this->audio_new;
    }

    /**
     * Whether notifications about board posts deleted enabled
     *
     * @return integer
     */
    public function getBoardPostDelete()
    {
        return $this->board_post_delete;
    }

    /**
     * Whether notifications about board posts edits enabled
     *
     * @return integer
     */
    public function getBoardPostEdit()
    {
        return $this->board_post_edit;
    }

    /**
     * Whether notifications about new board posts enabled
     *
     * @return integer
     */
    public function getBoardPostNew()
    {
        return $this->board_post_new;
    }

    /**
     * Whether notifications about board posts restores enabled
     *
     * @return integer
     */
    public function getBoardPostRestore()
    {
        return $this->board_post_restore;
    }

    /**
     * Whether notifications about anyone joined the community enabled
     *
     * @return integer
     */
    public function getGroupJoin()
    {
        return $this->group_join;
    }

    /**
     * Whether notifications about anyone left the community enabled
     *
     * @return integer
     */
    public function getGroupLeave()
    {
        return $this->group_leave;
    }

    /**
     * Whether notifications about new market comments enabled
     *
     * @return integer
     */
    public function getMarketCommentNew()
    {
        return $this->market_comment_new;
    }

    /**
     * Whether notifications about allowed messages enabled
     *
     * @return integer
     */
    public function getMessageAllow()
    {
        return $this->message_allow;
    }

    /**
     * Whether notifications about denied messages enabled
     *
     * @return integer
     */
    public function getMessageDeny()
    {
        return $this->message_deny;
    }

    /**
     * Whether notifications about new message enabled
     *
     * @return integer
     */
    public function getMessageNew()
    {
        return $this->message_new;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "groups.getCallbackSettings";
    }

    /**
     * Whether notifications about new photo comments enabled
     *
     * @return integer
     */
    public function getPhotoCommentNew()
    {
        return $this->photo_comment_new;
    }

    /**
     * Whether notifications about new photos enabled
     *
     * @return integer
     */
    public function getPhotoNew()
    {
        return $this->photo_new;
    }

    /**
     * Whether notifications about new video comments enabled
     *
     * @return integer
     */
    public function getVideoCommentNew()
    {
        return $this->video_comment_new;
    }

    /**
     * Whether notifications about new videos enabled
     *
     * @return integer
     */
    public function getVideoNew()
    {
        return $this->video_new;
    }

    /**
     * Whether notifications about new wall posts enabled
     *
     * @return integer
     */
    public function getWallPostNew()
    {
        return $this->wall_post_new;
    }

    /**
     * Whether notifications about wall replies edits enabled
     *
     * @return integer
     */
    public function getWallReplyEdit()
    {
        return $this->wall_reply_edit;
    }

    /**
     * Whether notifications about new wall replies enabled
     *
     * @return integer
     */
    public function getWallReplyNew()
    {
        return $this->wall_reply_new;
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
}
