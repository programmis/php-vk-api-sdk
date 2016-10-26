<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\WallAttachments;

class WallEditComment extends Request
{
    private $attachments = [];

    public function getCommentId()
    {
        return $this->vkarg_comment_id;
    }

    public function setCommentId($comment_id)
    {
        $this->vkarg_comment_id = $comment_id;
        return $this;
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

    public function setMessage($message)
    {
        $this->vkarg_message = $message;
        return $this;
    }

    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("wall.editComment");

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

        $this->setRequiredParams(array('message', 'attachments'));
        
        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (isset($json->response) && $json->response) {
            return true;
        }

        return false;
    }
}
