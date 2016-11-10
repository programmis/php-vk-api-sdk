<?php
namespace VkSdk\Ads\Includes;

/**
 * Class Paragraphs
 *
 * @package VkSdk\Ads\Includes
 */
class Paragraphs
{

    /**
     * @var string
     */
    public $paragraph;

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
