<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;

class WallDelete extends Request
{

    private $owner_id;
    private $post_id;

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

    public function doRequest()
    {
        if (!$this->post_id) {
            throw new \Exception("not fill post_id");
        }

        $this->setMethod("wall.delete");

        $this->setParameter("post_id", $this->post_id);
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