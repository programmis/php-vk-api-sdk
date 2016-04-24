<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\WallAttachments;

class WallAddComment extends Request
{

    private $owner_id;
    private $post_id;
    private $from_group;
    private $text;
    private $reply_to_comment;
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

    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;
        return $this;
    }

    public function setPostId($post_id)
    {
        $this->post_id = $post_id;
        return $this;
    }

    public function getPostId()
    {
        return $this->post_id;
    }

    public function doRequest()
    {
        if (!$this->text && !$this->attachments && !$this->post_id) {
            throw new \Exception("not fill attachments OR message");
        }

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
        if ($this->post_id) {
            $this->setParameter("post_id", $this->post_id);
        }
        if ($this->owner_id) {
            $this->setParameter("owner_id", $this->owner_id);
        }
        if ($this->from_group) {
            $this->setParameter("from_group", $this->from_group);
        }
        if ($this->text) {
            $this->setParameter("text", $this->text);
        }
        if ($this->reply_to_comment) {
            $this->setParameter("reply_to_comment", $this->reply_to_comment);
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
            isset($json->response) && $json->response &&
            isset($json->response->comment_id) && $json->response->comment_id
        ) {
            $this->comment_id = $json->response->comment_id;
            return true;
        }

        return false;
    }

}