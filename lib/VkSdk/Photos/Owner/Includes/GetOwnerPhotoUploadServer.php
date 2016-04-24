<?php

namespace VkSdk\Photos\Owner\Includes;

use VkSdk\Includes\Request;

class GetOwnerPhotoUploadServer extends Request
{

    private $owner_id;
    private $upload_url;

    public function getUploadUrl()
    {
        return $this->upload_url;
    }

    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("photos.getOwnerPhotoUploadServer");

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

        if (isset($json->response) && $json->response &&
            isset($json->response->upload_url) && $json->response->upload_url
        ) {
            $this->upload_url = $json->response->upload_url;

            return true;
        }
        return false;
    }

}