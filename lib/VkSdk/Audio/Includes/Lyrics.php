<?php

namespace VkSdk\Audio\Includes;

use lib\AutoFillObject;

/**
 * Class Lyrics
 * @package VkSdk\Audio\Includes
 */
class Lyrics
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $lyrics_id;

    /**
     * @var string
     */
    private $text;

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
