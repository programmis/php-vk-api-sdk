<?php

namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Copies an audio file to a user page or community page.
 * Class AudioAdd
 * @package VkSdk\Audio
 */
class AudioAdd extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["audio_id", "owner_id"]);

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
        return "audio.add";
    }

    /**
     * Album ID.
     *
     * @return $this
     *
     * @param integer $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->vkarg_album_id = $album_id;

        return $this;
    }

    /**
     * Audio file ID.
     *
     * @return $this
     *
     * @param integer $audio_id
     */
    public function setAudioId($audio_id)
    {
        $this->vkarg_audio_id = $audio_id;

        return $this;
    }

    /**
     * Community ID, needed when adding the audio file to a community (without minus).
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
     * ID of the user or community that owns the audio file. Use a negative value to designate a community ID. ; ;
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }
}
