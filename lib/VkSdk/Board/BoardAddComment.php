<?php

namespace VkSdk\Board;

use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\WallAttachments;

class BoardAddComment extends Request
{

    private $group_id;
    private $topic_id;
    private $from_group;
    private $text;
    private $attachments = array();
    private $sticker_id;
    private $comment_id;

    public function getCommentId()
    {
        return $this->comment_id;
    }

    public function setStickerId($sticker_id)
    {
        $this->sticker_id = $sticker_id;
        return $this;
    }

    public function setReplyToComment($reply_to_comment)
    {
        $this->reply_to_comment = $reply_to_comment;
        return $this;
    }

    public function addAttachment(WallAttachments $attachments)
    {
        return $this->attachments[] = $attachments;
    }

    public function setFromGroup($from_group)
    {
        $this->from_group = $from_group;
        return $this;
    }

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;
        return $this;
    }

    public function setTopicId($topic_id)
    {
        $this->topic_id = $topic_id;
        return $this;
    }

    public function doRequest()
    {

        $this->setRequiredParams(array('text', 'attachments', 'topic_id'));

        $this->setMethod("board.addComment");

        $attachments = "";

        if ($this->attachments) {
            $first = true;
            foreach ($this->attachments as $attach) {
                if (!$first) {
                    $attachments .= ",";
                }
                $attachments .= $attach->getAttachment();
                $first = false;
            }
        }

        if ($attachments) {
            $this->setParameter("attachments", $attachments);
        }
        if ($this->topic_id) {
            $this->setParameter("topic_id", $this->topic_id);
        }
        if ($this->group_id) {
            $this->setParameter("group_id", $this->group_id);
        }
        if ($this->from_group) {
            $this->setParameter("from_group", $this->from_group);
        }
        if ($this->text) {
            $this->setParameter("text", $this->text);
        }
        if ($this->sticker_id) {
            $this->setParameter("sticker_id", $this->sticker_id);
        }


        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
            isset($json->response) && $json->response
        ) {
            $this->comment_id = $json->response;
            return true;
        }

        return false;
    }

}