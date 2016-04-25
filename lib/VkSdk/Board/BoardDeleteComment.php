<?php

namespace VkSdk\Board;

use VkSdk\Includes\Request;

class BoardDeleteComment extends Request
{

    public function setTopicId($topic_id)
    {
        $this->vkarg_topic_id = $topic_id;
        return $this;
    }

    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;
        return $this;
    }

    public function setCommentId($comment_id)
    {
        $this->vkarg_comment_id = $comment_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setRequiredParams('comment_id');
        
        $this->setMethod("board.deleteComment");

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