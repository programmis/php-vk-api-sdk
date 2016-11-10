<?php

namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Saves market photos after successful uploading.
 * Class PhotosSaveMarketPhoto
 * @package VkSdk\Photos
 */
class PhotosSaveMarketPhoto extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["photo", "server", "hash"]);

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
        return "photos.saveMarketPhoto";
    }

    /**
     * Parameter returned when photos are .
     *
     * @return $this
     *
     * @param string $crop_data
     */
    public function setCropData($crop_data)
    {
        $this->vkarg_crop_data = $crop_data;

        return $this;
    }

    /**
     * Parameter returned when photos are .
     *
     * @return $this
     *
     * @param string $crop_hash
     */
    public function setCropHash($crop_hash)
    {
        $this->vkarg_crop_hash = $crop_hash;

        return $this;
    }

    /**
     * Community ID.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * Parameter returned when photos are .
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
     * Parameter returned when photos are .
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
     * Parameter returned when photos are .
     *
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
