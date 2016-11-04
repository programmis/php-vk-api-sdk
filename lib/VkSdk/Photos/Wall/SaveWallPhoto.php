<?php

namespace VkSdk\Photos\Wall;

use VkSdk\Photos\Includes\PhotoInterface;
use VkSdk\Photos\Wall\Includes\UploadWallPhoto;

class SaveWallPhoto extends UploadWallPhoto implements PhotoInterface
{
    /**
     * @var UploadWallPhoto
     */
    private $vk_upload_photo;

    private $media_id;
    private $album_id;
    private $owner_id;
    private $width;
    private $height;
    private $date;


    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getVkUploadPhoto()
    {
        return $this->vk_upload_photo;
    }

    /**
     * @param UploadWallPhoto $vk_upload_photo
     * @return SaveWallPhoto
     */
    public function setVkUploadPhoto(UploadWallPhoto $vk_upload_photo)
    {
        $this->vk_upload_photo = $vk_upload_photo;
        return $this;
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

    public function checkUploadPhoto()
    {
        if (!$this->vk_upload_photo) {
            throw  new \Exception('please set VkUploadPhoto');
        }
    }

    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        $this->checkUploadPhoto();

        $this->vk_upload_photo->setGroupId($group_id);
        return $this;
    }

    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("photos.saveWallPhoto");

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

        if (!is_object($json) && $json < 0) {
            return $json;
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
