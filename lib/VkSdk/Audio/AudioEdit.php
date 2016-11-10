<?php
namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Edits an audio file on a user or community page.;
 * Class AudioEdit
 *
 * @package VkSdk\Audio
 */
class AudioEdit extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id", "audio_id"]);

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
        return "audio.edit";
    }

    /**
     * Name of the artist.
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
     * Genre of the audio file. See the list of .
     *
     * @return $this
     *
     * @param integer $genre_id
     */
    public function setGenreId($genre_id)
    {
        $this->vkarg_genre_id = $genre_id;

        return $this;
    }

    /**
     * '1' — audio file will not be available for search; '0' — audio file will be available for search (default)
     *
     * @return $this
     *
     * @param boolean $no_search
     */
    public function setNoSearch($no_search)
    {
        $this->vkarg_no_search = $no_search;

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

    /**
     * Text of the lyrics of the audio file.
     *
     * @return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->vkarg_text = $text;

        return $this;
    }

    /**
     * Title of the audio file.
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
