<?php

namespace VkSdk\Board;

use VkSdk\Includes\Request;

class BoardDeleteComment extends Request
{

    private $group_id;
    private $topic_id;
    private $comment_id;


    public function setTopicId($topic_id)
    {
        $this->topic_id = $topic_id;
        return $this;
    }

    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;
        return $this;
    }

    public function setCommentId($comment_id)
    {
        $this->comment_id = $comment_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setRequiredParams('comment_id');
        
        $this->setMethod("board.deleteComment");

        $this->setParameter("comment_id", $this->comment_id);
        if ($this->group_id) {
            $this->setParameter("group_id", $this->group_id);
        }
        if ($this->topic_id) {
            $this->setParameter("topic_id", $this->topic_id);
        }

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