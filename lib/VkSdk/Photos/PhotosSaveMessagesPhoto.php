<?php

namespace VkSdk\Photos;

use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\PhotoFull;

/**
 * Saves a photo after being successfully uploaded. URL obtained with  method.
 * Class PhotosSaveMessagesPhoto
 *
 * @package VkSdk\Photos
 */
class PhotosSaveMessagesPhoto extends Request
{
    /** @var PhotoFull[] */
    private $photos = [];

    /**
     * @return PhotoFull[]
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["photo"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                foreach ($json->response as $item) {
                    $photo = new PhotoFull();
                    $photo->fillByJson($item);

                    $this->photos[] = $photo;
                }

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
        return "photos.saveMessagesPhoto";
    }

    /**
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
     * Parameter returned when .
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
     * @return $this
     *
     * @param integer $server
     */
    public function setServer($server)
    {
        $this->vkarg_server = $server;

        return $this;
    }
}
