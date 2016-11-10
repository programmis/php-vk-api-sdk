<?php

namespace VkSdk\Ads\Includes;

use lib\AutoFillObject;

/**
 * Class Paragraphs
 * @package VkSdk\Ads\Includes
 */
class Paragraphs
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $paragraph;

    /**
     * Rules paragraph
     *
     * @return string
     */
    public function getParagraph()
    {
        return $this->paragraph;
    }

    /**
     * @return $this
     *
     * @param string $paragraph
     */
    public function setParagraph($paragraph)
    {
        $this->paragraph = $paragraph;

        return $this;
    }
}
