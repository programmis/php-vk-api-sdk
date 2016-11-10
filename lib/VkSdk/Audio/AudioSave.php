<?php

namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Saves audio files after successful [https://vk.com/dev/upload_files_2?f=8.%20Uploading%20Audio%20Files|uploading].
 * Class AudioSave
 * @package VkSdk\Audio
 */
class AudioSave extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["server", "audio"]);

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
        return "audio.save";
    }

    /**
     * The name of the artist. By default, this is obtained from ID3 tags.
     *
     * @return $this
     *
     * @param string $artist
     */
    public function setArtist($artist)
    {
        $this->vkarg_artist = $artist;

        return $this;
    }

    /**
     * This parameter is returned when the audio file is [https://vk.com/dev/upload_files_2?f=8.%20Uploading%20Audio%20Files|uploaded to the server].
     *
     * @return $this
     *
     * @param string $audio
     */
    public function setAudio($audio)
    {
        $this->vkarg_audio = $audio;

        return $this;
    }

    /**
     * This parameter is returned when the audio file is [https://vk.com/dev/upload_files_2?f=8.%20Uploading%20Audio%20Files|uploaded to the server].
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
     * This parameter is returned when the audio file is [https://vk.com/dev/upload_files_2?f=8.%20Uploading%20Audio%20Files|uploaded to the server].
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

    /**
     * The title of the audio file. By default, this is obtained from ID3 tags.
     *
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->vkarg_title = $title;

        return $this;
    }
}
