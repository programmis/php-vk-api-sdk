<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;

class WallDelete extends Request
{
    
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

    public function doRequest()
    {
        $this->setRequiredParams('post_id');

        $this->setMethod("wall.delete");

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