<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\WallAttachments;

class WallPost extends Request
{
    private $attachments = [];
    private $post_id;

    public function addAttachment(WallAttachments $attachments)
    {
        return $this->attachments[] = $attachments;
    }

    public function setFriendsOnly($friends_only)
    {
        $this->vkarg_friends_only = $friends_only;
        return $this;
    }

    public function setFromGroup($from_group)
    {
        $this->vkarg_from_group = $from_group;
        return $this;
    }

    public function setMessage($message)
    {
        $this->vkarg_message = $message;
        return $this;
    }

    public function setServices($services)
    {
        $this->vkarg_services = $services;
        return $this;
    }

    public function setSigned($signed)
    {
        $this->vkarg_signed = $signed;
        return $this;
    }

    public function setPublishDate($publish_date)
    {
        $this->vkarg_publish_date = $publish_date;
        return $this;
    }

    public function setLat($lat)
    {
        $this->vkarg_lat = $lat;
        return $this;
    }

    public function setLong($long)
    {
        $this->vkarg_long = $long;
        return $this;
    }

    public function setPlaceId($place_id)
    {
        $this->vkarg_place_id = $place_id;
        return $this;
    }

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

    public function getPostId()
    {
        return $this->post_id;
    }

    public function doRequest()
    {
        $this->setMethod("wall.post");

        $attachments = "";

        if ($this->attachments) {
            $first = true;
            foreach ($this->attachments as $attach) {
                if (!$first) {
                    $attachments .= ",";
                }
                $attachments .= $attach->getAttachment();
                $first = false;
            }
        }

        if ($attachments) {
            $this->setParameter("attachments", $attachments);
        }
        
        $this->setRequiredParams(array('attachments', 'message', 'post_id'));

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (isset($json->response) && $json->response
            && isset($json->response->post_id) && $json->response->post_id
        ) {
            $this->post_id = $json->response->post_id;
            return true;
        }

        return false;
    }
}
