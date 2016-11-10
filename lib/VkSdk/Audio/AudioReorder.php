<?php
namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Reorders an audio file, placing it between other specified audio files.
 * Class AudioReorder
 *
 * @package VkSdk\Audio
 */
class AudioReorder extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["audio_id"]);

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
        return "audio.reorder";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * ID of the audio file after which to place the audio file.
     *
     * @return $this
     *
     * @param integer $after
     */
    public function setAfter($after)
    {
        $this->vkarg_after = $after;

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
     * ID of the audio file before which to place the audio file.
     *
     * @return $this
     *
     * @param integer $before
     */
    public function setBefore($before)
    {
        $this->vkarg_before = $before;

        return $this;
    }

    /**
     * ID of the user or community that owns the audio file.
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
