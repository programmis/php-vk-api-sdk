<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;

/**
 * Adds a comment to a post on a user wall or community wall.
 * Class WallCreateComment
 * @package VkSdk\Wall
 */
class WallCreateComment extends Request
{

    /**
     * @var integer
     */
    private $comment_id;

    /**
     * (Required if 'message' is not set.) List of media objects attached to the comment, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media ojbect:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; '<owner_id>' — ID of the media owner.; '<media_id>' — Media ID. ; ; For example:; "photo100172_166443618,photo66748_265827614"
     *
     * @return $this
     *
     * @param string $attachment
     */
    public function addAttachment($attachment)
    {
        $this->vkarg_attachments[] = $attachment;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["post_id"]);

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
     * Created comment ID
     *
     * @return integer
     */
    public function getCommentId()
    {
        return $this->comment_id;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "wall.createComment";
    }

    /**
     * (Required if 'message' is not set.) List of media objects attached to the comment, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media ojbect:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; '<owner_id>' — ID of the media owner.; '<media_id>' — Media ID. ; ; For example:; "photo100172_166443618,photo66748_265827614"
     *
     * @return $this
     *
     * @param array $attachments
     */
    public function setAttachments(array $attachments)
    {
        $this->vkarg_attachments = $attachments;

        return $this;
    }

    /**
     * '1' — to post the comment as from the community;; '0' — (default) to post the comment as from the user.
     *
     * @return $this
     *
     * @param boolean $from_group
     */
    public function setFromGroup($from_group)
    {
        $this->vkarg_from_group = $from_group;

        return $this;
    }

    /**
     * Unique identifier to avoid repeated comments.
     *
     * @return $this
     *
     * @param string $guid
     */
    public function setGuid($guid)
    {
        $this->vkarg_guid = $guid;

        return $this;
    }

    /**
     * (Required if 'attachments' is not set.) Text of the comment.
     *
     * @return $this
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->vkarg_message = $message;

        return $this;
    }

    /**
     * User ID or community ID. Use a negative value to designate a community ID.
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
     * Post ID.
     *
     * @return $this
     *
     * @param integer $post_id
     */
    public function setPostId($post_id)
    {
        $this->vkarg_post_id = $post_id;

        return $this;
    }

    /**
     * ID of comment to reply.
     *
     * @return $this
     *
     * @param integer $reply_to_comment
     */
    public function setReplyToComment($reply_to_comment)
    {
        $this->vkarg_reply_to_comment = $reply_to_comment;

        return $this;
    }

    /**
     * Sticker ID.
     *
     * @return $this
     *
     * @param integer $sticker_id
     */
    public function setStickerId($sticker_id)
    {
        $this->vkarg_sticker_id = $sticker_id;

        return $this;
    }
}
