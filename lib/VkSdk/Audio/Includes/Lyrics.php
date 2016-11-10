<?php
namespace VkSdk\Audio\Includes;

/**
 * Class Lyrics
 *
 * @package VkSdk\Audio\Includes
 */
class Lyrics
{

    /**
     * @var integer
     */
    public $lyrics_id;

    /**
     * @var string
     */
    public $text;

    /**
     * Lyrics ID
     *
     * @return integer
     */
    public function getLyricsId()
    {
        return $this->lyrics_id;
    }

    /**
     * @return $this
     *
     * @param integer $lyrics_id
     */
    public function setLyricsId($lyrics_id)
    {
        $this->lyrics_id = $lyrics_id;

        return $this;
    }

    /**
     * Lyrics text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
}
