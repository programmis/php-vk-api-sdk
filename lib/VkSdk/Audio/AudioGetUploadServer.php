<?php

namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Returns the server address to [https://vk.com/dev/upload_files_2?f=8.%20Uploading%20Audio%20Files|upload audio files].
 * Class AudioGetUploadServer
 * @package VkSdk\Audio
 */
class AudioGetUploadServer extends Request
{

    /**
     * @var string
     */
    private $upload_url;

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
        return "audio.getUploadServer";
    }

    /**
     * URL to upload the audio
     *
     * @return string
     */
    public function getUploadUrl()
    {
        return $this->upload_url;
    }
}
