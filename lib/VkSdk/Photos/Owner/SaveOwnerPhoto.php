<?php

namespace VkSdk\Photos\Owner;

use VkSdk\Photos\Includes\Photo;
use VkSdk\Photos\Owner\Includes\UploadOwnerPhoto;

class SaveOwnerPhoto extends UploadOwnerPhoto implements Photo
{

    /**
     * @var  $vk_upload_photo UploadOwnerPhoto
     */
    private $vk_upload_photo;
    private $owner_id;

    private $photo_hash;
    private $photo_src;
    private $photo_src_big;
    private $photo_src_small;
    private $post_id;

    /**
     * @return UploadOwnerPhoto
     */
    public function getVkUploadPhoto()
    {
        return $this->vk_upload_photo;
    }

    /**
     * @param UploadOwnerPhoto $vk_upload_photo
     * @return SaveOwnerPhoto
     */
    public function setVkUploadPhoto(UploadOwnerPhoto $vk_upload_photo)
    {
        $this->vk_upload_photo = $vk_upload_photo;
        return $this;
    }
    

    public function getPostId()
    {
        return $this->post_id;
    }

    public function getPhotoSrcSmall()
    {
        return $this->photo_src_small;
    }

    public function getPhotoSrcBig()
    {
        return $this->photo_src_big;
    }

    public function getPhotoSrc()
    {
        return $this->photo_src;
    }

    public function getPhotoHash()
    {
        return $this->photo_hash;
    }

    public function checkUploadPhoto(){
        if(!$this->vk_upload_photo){
            throw new \Exception('please set vk upload photo');
        }
    }
    
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;
        
        $this->checkUploadPhoto();
        
        $this->vk_upload_photo->setOwnerId($owner_id);
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("photos.saveOwnerPhoto");

        $this->checkUploadPhoto();
        
        $vk_upload = $this->vk_upload_photo->doRequest();

        if (!$vk_upload) {
            $this->logger->debug("upload owner photo result is empty");
            return false;
        }

        $this->setParameter("server", $this->vk_upload_photo->getServer());
        $this->setParameter("photo", $this->vk_upload_photo->getPhoto());
        $this->setParameter("hash", $this->vk_upload_photo->getHash());

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
            isset($json->response) && $json->response &&
            isset($json->response->saved) && $json->response->saved
        ) {
            if (isset($json->response->photo_hash) && $json->response->photo_hash) {
                $this->photo_hash = $json->response->photo_hash;
            }
            if (isset($json->response->photo_src) && $json->response->photo_src) {
                $this->photo_src = $json->response->photo_src;
            }
            if (isset($json->response->photo_src_big) && $json->response->photo_src_big) {
                $this->photo_src_big = $json->response->photo_src_big;
            }
            if (isset($json->response->photo_src_small) && $json->response->photo_src_small) {
                $this->photo_hash = $json->response->photo_src_small;
            }
            if (isset($json->response->post_id) && $json->response->post_id) {
                $this->post_id = $json->response->post_id;
            }

            return true;
        }

        return false;
    }

}