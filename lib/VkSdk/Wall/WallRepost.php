<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;

class WallRepost extends Request
{
    private $success;
    private $reposts_count;
    private $likes_count;
    private $post_id;

    public function getPostId()
    {
        return $this->post_id;
    }

    public function getLikesCount()
    {
        return $this->likes_count;
    }

    public function getRepostsCount()
    {
        return $this->reposts_count;
    }

    public function getSuccess()
    {
        return $this->success;
    }

    public function setObject($object)
    {
        $this->vkarg_object = $object;
        return $this;
    }

    public function setMessage($message)
    {
        $this->vkarg_message = $message;
        return $this;
    }

    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setRequiredParams('object');

        $this->setMethod("wall.repost");

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
            isset($json->response) && $json->response &&
            isset($json->response->success) && $json->response->success &&
            isset($json->response->post_id) && $json->response->post_id &&
            isset($json->response->reposts_count) &&
            isset($json->response->likes_count)
        ) {
            $this->reposts_count = $json->response->reposts_count;
            $this->likes_count = $json->response->likes_count;
            $this->success = $json->response->success;
            $this->post_id = $json->response->post_id;

            return true;
        }

        return false;

    }

}