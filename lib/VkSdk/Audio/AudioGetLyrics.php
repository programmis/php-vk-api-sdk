<?php
namespace VkSdk\Audio;

use lib\AutoFillObject;
use VkSdk\Audio\Includes\Lyrics;
use VkSdk\Includes\Request;

/**
 * Returns lyrics associated with an audio file.
 * Class AudioGetLyrics
 *
 * @package VkSdk\Audio
 */
class AudioGetLyrics extends Request
{

    use AutoFillObject;

    /**
     * @var Lyrics
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["lyrics_id"]);

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
        return "audio.getLyrics";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Audio\Includes\Lyrics',
        ];
    }

    /**
     * Lyrics ID (could be obtained with , , or  methods).
     *
     * @return $this
     *
     * @param integer $lyrics_id
     */
    public function setLyricsId($lyrics_id)
    {
        $this->vkarg_lyrics_id = $lyrics_id;

        return $this;
    }
}
