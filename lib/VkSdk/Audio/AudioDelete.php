<?php
namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Deletes an audio file from a user page or community page.
 * Class AudioDelete
 *
 * @package VkSdk\Audio
 */
class AudioDelete extends Request
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
        return "audio.delete";
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
     * ID of the user or community that owns the audio file. Use a negative value to designate a community ID.
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
