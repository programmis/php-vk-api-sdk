<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;

class WallDeleteComment extends Request
{

    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;
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

        $this->setMethod("wall.deleteComment");
        
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