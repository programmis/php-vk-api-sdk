<?php

namespace VkSdk\Board;

use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\WallAttachments;

class BoardEditComment extends Request
{

    private $attachments = [];

    public function setCommentId($comment_id)
    {
        $this->vkarg_comment_id = $comment_id;
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
        $this->vkarg_text = $text;
        return $this;
    }

    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;
        return $this;
    }

    public function setTopicId($topic_id)
    {
        $this->vkarg_topic_id = $topic_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("board.editComment");

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

        $this->setRequiredParams(array('text', 'attachments', 'topic_id'));

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
            return true;
        }

        return false;
    }

}