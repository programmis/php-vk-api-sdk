<?php
namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Returns an upload link for chat cover pictures.
 * Class PhotosGetChatUploadServer
 *
 * @package VkSdk\Photos
 */
class PhotosGetChatUploadServer extends Request
{

    /**
     * @var string
     */
    public $upload_url;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["chat_id"]);

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
        return "photos.getChatUploadServer";
    }

    /**
     * URL to upload the photo
     *
     * @return string
     */
    public function getUploadUrl()
    {
        return $this->upload_url;
    }

    /**
     * ID of the chat for which you want to upload a cover photo.
     *
     * @return $this
     *
     * @param integer $chat_id
     */
    public function setChatId($chat_id)
    {
        $this->vkarg_chat_id = $chat_id;

        return $this;
    }

    /**
     * Width (in pixels) of the photo after cropping.
     *
     * @return $this
     *
     * @param integer $crop_width
     */
    public function setCropWidth($crop_width)
    {
        $this->vkarg_crop_width = $crop_width;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $crop_x
     */
    public function setCropX($crop_x)
    {
        $this->vkarg_crop_x = $crop_x;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $crop_y
     */
    public function setCropY($crop_y)
    {
        $this->vkarg_crop_y = $crop_y;

        return $this;
    }
}
