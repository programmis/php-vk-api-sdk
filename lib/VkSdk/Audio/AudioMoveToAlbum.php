<?php
namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Moves audio files to an album.
 * Class AudioMoveToAlbum
 *
 * @package VkSdk\Audio
 */
class AudioMoveToAlbum extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * IDs of the audio files to be moved.; "NOTE: An album can hold up to 1000 audio files.";
     *
     * @return $this
     *
     * @param integer $audio_id
     */
    public function addAudioId($audio_id)
    {
        $this->vkarg_audio_ids[] = $audio_id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["audio_ids"]);

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
        return "audio.moveToAlbum";
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
     * ID of the album to which the audio files will be moved.
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
     * IDs of the audio files to be moved.; "NOTE: An album can hold up to 1000 audio files.";
     *
     * @return $this
     *
     * @param array $audio_ids
     */
    public function setAudioIds(array $audio_ids)
    {
        $this->vkarg_audio_ids = $audio_ids;

        return $this;
    }

    /**
     * ID of the community where the audio files are located. By default, current user ID.;
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
}
