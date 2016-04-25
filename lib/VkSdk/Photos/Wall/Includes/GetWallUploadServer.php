<?php

namespace VkSdk\Photos\Wall\Includes;

use VkSdk\Includes\Request;

class GetWallUploadServer extends Request
{

    private $upload_url;
    private $album_id;
    private $user_id;


    public function getUploadUrl()
    {
        return $this->upload_url;
    }

    public function getAlbumId()
    {
        return $this->album_id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("photos.getWallUploadServer");

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (isset($json->response) && $json->response &&
            isset($json->response->upload_url) && $json->response->upload_url &&
            isset($json->response->album_id) && $json->response->album_id &&
            isset($json->response->user_id) && $json->response->user_id
        ) {
            $this->upload_url = $json->response->upload_url;
            $this->album_id = $json->response->album_id;
            $this->user_id = $json->response->user_id;

            return true;
        }
        return false;
    }

}