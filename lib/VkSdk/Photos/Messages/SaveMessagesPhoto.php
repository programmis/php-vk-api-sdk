<?php

namespace VkSdk\Photos\Messages;

use VkSdk\Photos\Includes\Photo;
use VkSdk\Photos\Messages\Includes\UploadMessagesPhoto;

class SaveMessagesPhoto extends UploadMessagesPhoto implements Photo
{

    /**
     * @var UploadMessagesPhoto
     */
    private $vk_upload_photo;

    private $media_id;
    private $album_id;
    private $owner_id;
    private $width;
    private $height;
    private $date;

    /**
     * @return UploadMessagesPhoto
     */
    public function getVkUploadPhoto()
    {
        return $this->vk_upload_photo;
    }

    /**
     * @param UploadMessagesPhoto $vk_upload_photo
     * @return SaveMessagesPhoto
     */
    public function setVkUploadPhoto($vk_upload_photo)
    {
        $this->vk_upload_photo = $vk_upload_photo;
        return $this;
    }

    
    public function getDate()
    {
        return $this->date;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getOwnerId()
    {
        return $this->owner_id;
    }

    public function getAlbumId()
    {
        return $this->album_id;
    }

    public function getMediaId()
    {
        return $this->media_id;
    }

    public function checkUploadPhoto(){
        if(!$this->vk_upload_photo){
            throw new \Exception('please set upload photo');
        }
    }
    
    public function doRequest()
    {
        $this->setMethod("photos.saveMessagesPhoto");

        $this->checkUploadPhoto(); 
        
        $vk_upload = $this->vk_upload_photo->doRequest();

        if (!$vk_upload) {
            $this->logger->error("upload wall photo result is empty");
            return false;
        }

        $this->setParameter("server", $this->vk_upload_photo->getServer());
        $this->setParameter("photo", $this->vk_upload_photo->getPhoto());
        $this->setParameter("hash", $this->vk_upload_photo->getHash());

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (isset($json->response) && $json->response && isset($json->response[0]) && $json->response[0] &&
            isset($json->response[0]->id) && $json->response[0]->id &&
            isset($json->response[0]->album_id) && $json->response[0]->album_id &&
            isset($json->response[0]->owner_id) && $json->response[0]->owner_id &&
            isset($json->response[0]->height) && $json->response[0]->height &&
            isset($json->response[0]->width) && $json->response[0]->width &&
            isset($json->response[0]->date) && $json->response[0]->date
        ) {
            $this->media_id = $json->response[0]->id;
            $this->album_id = $json->response[0]->album_id;
            $this->owner_id = $json->response[0]->owner_id;
            $this->height = $json->response[0]->height;
            $this->width = $json->response[0]->width;
            $this->date = $json->response[0]->date;

            return true;
        }

        return false;
    }

}