<?php
namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Returns information about audio files by their IDs.
 * Class AudioGetById
 *
 * @package VkSdk\Audio
 */
class AudioGetById extends Request
{

    /**
     * Audio file IDs, in the following format:; "{owner_id}_{audio_id}"
     *
     * @return $this
     *
     * @param string $audio
     */
    public function addAudio($audio)
    {
        $this->vkarg_audios[] = $audio;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["audios"]);

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
        return "audio.getById";
    }

    /**
     * Audio file IDs, in the following format:; "{owner_id}_{audio_id}"
     *
     * @return $this
     *
     * @param array $audios
     */
    public function setAudios(array $audios)
    {
        $this->vkarg_audios = $audios;

        return $this;
    }
}
