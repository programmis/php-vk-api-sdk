<?php

namespace VkSdk\Board;

use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\WallAttachments;

class BoardAddComment extends Request
{

    private $attachments = [];
    private $comment_id;

    public function getCommentId()
    {
        return $this->comment_id;
    }

    public function setStickerId($sticker_id)
    {
        $this->vkarg_sticker_id = $sticker_id;
        return $this;
    }

    public function addAttachment(WallAttachments $attachments)
    {
        return $this->attachments[] = $attachments;
    }

    public function setFromGroup($from_group)
    {
        $this->vkarg_from_group = $from_group;
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
            $this->comment_id = $json->response;
            return true;
        }

        return false;
    }

}