<?php
namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Saves  a profile or community photo.
 * Class PhotosSaveOwnerPhoto
 *
 * @package VkSdk\Photos
 */
class PhotosSaveOwnerPhoto extends Request
{

    /**
     * @var string
     */
    public $photo_hash;

    /**
     * @var string
     */
    public $photo_src;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "photos.saveOwnerPhoto";
    }

    /**
     * Parameter for saveProfilePhoto method
     *
     * @return string
     */
    public function getPhotoHash()
    {
        return $this->photo_hash;
    }

    /**
     * Uploaded image url
     *
     * @return string
     */
    public function getPhotoSrc()
    {
        return $this->photo_src;
    }

    /**
     * parameter returned after .
     *
     * @return $this
     *
     * @param string $hash
     */
    public function setHash($hash)
    {
        $this->vkarg_hash = $hash;

        return $this;
    }

    /**
     * parameter returned after .
     *
     * @return $this
     *
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->vkarg_photo = $photo;

        return $this;
    }

    /**
     * parameter returned after .
     *
     * @return $this
     *
     * @param string $server
     */
    public function setServer($server)
    {
        $this->vkarg_server = $server;

        return $this;
    }
}
