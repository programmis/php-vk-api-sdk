<?php

namespace VkSdk\Photos;

use VkSdk\Includes\Request;

class PhotosCreateAlbum extends Request
{

    private $title;
    private $group_id;
    private $description;
    private $comment_privacy;
    private $privacy;
    private $id;


    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function doRequest()
    {
        $this->setMethod("photos.createAlbum");
        
        $this->setParameter("title", $this->title);
        if ($this->group_id) {
            $this->setParameter("group_id", $this->group_id);
        }
        if ($this->description) {
            $this->setParameter("description", $this->description);
        }
        if ($this->comment_privacy) {
            $this->setParameter("comment_privacy", $this->comment_privacy);
        }
        if ($this->privacy) {
            $this->setParameter("privacy", $this->privacy);
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
            isset($json->response->id) && $json->response->id
        ) {
            $this->id = $json->response->id;

            return true;
        }

        return false;
    }

}