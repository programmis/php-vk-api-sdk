<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\WallAttachments;

class WallAddComment extends Request
{
    private $post_id;
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

    public function setReplyToComment($reply_to_comment)
    {
        $this->vkarg_reply_to_comment = $reply_to_comment;
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

    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;
        return $this;
    }

    public function setPostId($post_id)
    {
        $this->vkarg_post_id = $post_id;
        return $this;
    }

    public function getPostId()
    {
        return $this->post_id;
    }

    public function doRequest()
    {
        $this->setMethod("wall.addComment");

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
        
        $this->setRequiredParams(array('text', 'attachments', 'post_id'));

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (isset($json->response) && $json->response
            && isset($json->response->comment_id) && $json->response->comment_id
        ) {
            $this->comment_id = $json->response->comment_id;
            return true;
        }

        return false;
    }
}
