<?php

namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Returns a list of audio files from the "Popular".
 * Class AudioGetPopular
 * @package VkSdk\Audio
 */
class AudioGetPopular extends Request
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
        return "audio.getPopular";
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
     * Genre ID. See .
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
     * '1' — to return only foreign audio files; '0' — to return all audio files;
     *
     * @return $this
     *
     * @param boolean $only_eng
     */
    public function setOnlyEng($only_eng)
    {
        $this->vkarg_only_eng = $only_eng;

        return $this;
    }
}
