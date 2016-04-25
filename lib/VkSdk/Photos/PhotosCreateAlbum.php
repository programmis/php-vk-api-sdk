<?php

namespace VkSdk\Photos;

use VkSdk\Includes\Request;

class PhotosCreateAlbum extends Request
{
    private $id;


    public function setTitle($title)
    {
        $this->vkarg_title = $title;
        return $this;
    }

    /**
     * @param mixed $group_id
     * @return PhotosCreateAlbum
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;
        return $this;
    }

    /**
     * @param mixed $description
     * @return PhotosCreateAlbum
     */
    public function setDescription($description)
    {
        $this->vkarg_description = $description;
        return $this;
    }

    /**
     * @param mixed $comment_privacy
     * @return PhotosCreateAlbum
     */
    public function setCommentPrivacy($comment_privacy)
    {
        $this->vkarg_comment_privacy = $comment_privacy;
        return $this;
    }

    /**
     * @param mixed $privacy
     * @return PhotosCreateAlbum
     */
    public function setPrivacy($privacy)
    {
        $this->vkarg_privacy = $privacy;
        return $this;
    }
    
    

    public function getId()
    {
        return $this->id;
    }

    public function doRequest()
    {
        $this->setMethod("photos.createAlbum");        

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