<?php

namespace VkSdk\Wall\Includes;

class WallAttachments
{
    private $type;
    private $owner_id;
    private $media_id;
    
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;
        return $this;
    }

    public function setMediaId($media_id)
    {
        $this->media_id = $media_id;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getOwnerId()
    {
        return $this->owner_id;
    }

    public function getMediaId()
    {
        return $this->media_id;
    }

    public function getAttachment()
    {
        if (!$this->type) {
            throw new \Exception("not fill type");
        }
        if (!$this->owner_id) {
            throw new \Exception("not fill owner_id");
        }
        if (!$this->media_id) {
            throw new \Exception("not fill media_id");
        }

        return $this->type . $this->owner_id . "_" . $this->media_id;
    }
}
