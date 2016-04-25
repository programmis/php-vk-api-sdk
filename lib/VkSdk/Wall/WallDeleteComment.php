<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;

class WallDeleteComment extends Request
{

    private $owner_id;
    private $comment_id;

    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;
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

        $this->setMethod("wall.deleteComment");

        $this->setParameter("comment_id", $this->comment_id);
        if ($this->owner_id) {
            $this->setParameter("owner_id", $this->owner_id);
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