<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\WallAttachments;

class WallPost extends Request
{

    private $owner_id;
    private $friends_only;
    private $from_group;
    private $message;
    private $attachments = array();
    private $services;
    private $signed;
    private $publish_date;
    private $lat;
    private $long;
    private $place_id;
    private $post_id;

    public function addAttachment(WallAttachments $attachments)
    {
        return $this->attachments[] = $attachments;
    }

    public function setFriendsOnly($friends_only)
    {
        $this->friends_only = $friends_only;
        return $this;
    }

    public function setFromGroup($from_group)
    {
        $this->from_group = $from_group;
        return $this;
    }

    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function setServices($services)
    {
        $this->services = $services;
        return $this;
    }

    public function setSigned($signed)
    {
        $this->signed = $signed;
        return $this;
    }

    public function setPublishDate($publish_date)
    {
        $this->publish_date = $publish_date;
        return $this;
    }

    public function setLat($lat)
    {
        $this->lat = $lat;
        return $this;
    }

    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }

    public function setPlaceId($place_id)
    {
        $this->place_id = $place_id;
        return $this;
    }

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

    public function getPostId()
    {
        return $this->post_id;
    }

    public function doRequest()
    {
        if (!$this->message && !$this->attachments && !$this->post_id) {
            throw new \Exception("not fill attachments OR message");
        }

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
        if ($this->post_id) {
            $this->setParameter("post_id", $this->post_id);
        }
        if ($this->owner_id) {
            $this->setParameter("owner_id", $this->owner_id);
        }
        if ($this->friends_only) {
            $this->setParameter("friends_only", $this->friends_only);
        }
        if ($this->from_group) {
            $this->setParameter("from_group", $this->from_group);
        }
        if ($this->message) {
            $this->setParameter("message", $this->message);
        }
        if ($this->services) {
            $this->setParameter("services", $this->services);
        }
        if ($this->signed) {
            $this->setParameter("signed", $this->signed);
        }
        if ($this->publish_date) {
            $this->setParameter("publish_date", $this->publish_date);
        }
        if ($this->lat) {
            $this->setParameter("lat", $this->lat);
        }
        if ($this->long) {
            $this->setParameter("long", $this->long);
        }
        if ($this->place_id) {
            $this->setParameter("place_id", $this->place_id);
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
            isset($json->response->post_id) && $json->response->post_id
        ) {
            $this->post_id = $json->response->post_id;
            return true;
        }

        return false;
    }

}