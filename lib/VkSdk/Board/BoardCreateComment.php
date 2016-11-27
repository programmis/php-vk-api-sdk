<?php

namespace VkSdk\Board;

use VkSdk\Includes\Request;

/**
 * Adds a comment on a topic on a community's discussion board.
 * Class BoardCreateComment
 * @package VkSdk\Board
 */
class BoardCreateComment extends Request
{
    /** @var array $attachments */
    private $attachments = [];

    /** @var int $response */
    private $response;

    /**
     * @return int
     */
    public function getCommentId()
    {
        return $this->response;
    }

    /**
     * (Required if 'text' is not set.) List of media objects attached to the comment, in the following format:;
     * "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media object:; 'photo' — photo; 'video' — video;
     * 'audio' — audio; 'doc' — document; '<owner_id>' — ID of the media owner. ; '<media_id>' — Media ID.
     *
     * @return $this
     *
     * @param string $attachment
     */
    public function addAttachment($attachment)
    {
        $this->attachments[] = $attachment;

        return $this;
    }

    /**
     * result in $this->getCommentId();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setParameter('attachments', $this->attachments);

        $this->setRequiredParams(["group_id", "topic_id"]);

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
        return "board.createComment";
    }

    /**
     * (Required if 'text' is not set.) List of media objects attached to the comment, in the following format:;
     * "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media object:; 'photo' — photo; 'video' — video;
     * 'audio' — audio; 'doc' — document; '<owner_id>' — ID of the media owner. ; '<media_id>' — Media ID.
     *
     * @return $this
     *
     * @param array $attachments
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * '1' — to post the comment as by the community; '0' — to post the comment as by the user (default)
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
     * ID of the community that owns the discussion board.
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

    /**
     * ID of the topic to be commented on.
     *
     * @return $this
     *
     * @param integer $topic_id
     */
    public function setTopicId($topic_id)
    {
        $this->vkarg_topic_id = $topic_id;

        return $this;
    }
}
