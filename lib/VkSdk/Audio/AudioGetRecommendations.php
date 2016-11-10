<?php
namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Returns a list of suggested audio files based on a user's playlist or a particular audio file.
 * Class AudioGetRecommendations
 *
 * @package VkSdk\Audio
 */
class AudioGetRecommendations extends Request
{

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
        return "audio.getRecommendations";
    }

    /**
     * Number of audio files to return.
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of audio files.
     *
     * @return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * '1' — shuffle on
     *
     * @return $this
     *
     * @param boolean $shuffle
     */
    public function setShuffle($shuffle)
    {
        $this->vkarg_shuffle = $shuffle;

        return $this;
    }

    /**
     * Use to get recommendations based on a particular audio file. The ID of the user or community that owns an audio file and that audio file's ID, separated by an underscore.;
     *
     * @return $this
     *
     * @param string $target_audio
     */
    public function setTargetAudio($target_audio)
    {
        $this->vkarg_target_audio = $target_audio;

        return $this;
    }

    /**
     * Use to get recommendations based on a user's playlist. User ID. By default, the current user ID.;
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
