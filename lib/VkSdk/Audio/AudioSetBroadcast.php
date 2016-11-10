<?php
namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Activates an audio broadcast to the status of a user or community.
 * Class AudioSetBroadcast
 *
 * @package VkSdk\Audio
 */
class AudioSetBroadcast extends Request
{

    /**
     * IDs of communities and user whose statuses will be included in the broadcast. Use a negative value to designate a community ID. By default, current user ID.
     *
     * @return $this
     *
     * @param integer $target_id
     */
    public function addTargetId($target_id)
    {
        $this->vkarg_target_ids[] = $target_id;

        return $this;
    }

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
        return "audio.setBroadcast";
    }

    /**
     * ID of the audio file to be shown in status (e.g., '1_190442705'). If the parameter is not set, the audio status of given communities and user will be deleted.
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
     * IDs of communities and user whose statuses will be included in the broadcast. Use a negative value to designate a community ID. By default, current user ID.
     *
     * @return $this
     *
     * @param array $target_ids
     */
    public function setTargetIds(array $target_ids)
    {
        $this->vkarg_target_ids = $target_ids;

        return $this;
    }
}
