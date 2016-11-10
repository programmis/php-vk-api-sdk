<?php

namespace VkSdk\Status\Includes;

use lib\AutoFillObject;
use VkSdk\Audio\Includes\Full;

/**
 * Class Status
 * @package VkSdk\Status\Includes
 */
class Status
{

    use AutoFillObject;

    /**
     * @var Full
     */
    private $audio;

    /**
     * @var string
     */
    private $text;

    /**
     * @return Full
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @return $this
     *
     * @param Full $audio
     */
    public function setAudio(Full $audio)
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * Status text
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

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'audio' => 'VkSdk\Audio\Includes\Full',
        ];
    }
}
