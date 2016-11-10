<?php
namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Saves market album photos after successful uploading.
 * Class PhotosSaveMarketAlbumPhoto
 *
 * @package VkSdk\Photos
 */
class PhotosSaveMarketAlbumPhoto extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id", "photo", "server", "hash"]);

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
        return "photos.saveMarketAlbumPhoto";
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
