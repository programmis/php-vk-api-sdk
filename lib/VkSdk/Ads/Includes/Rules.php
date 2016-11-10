<?php
namespace VkSdk\Ads\Includes;

use lib\AutoFillObject;

/**
 * Class Rules
 *
 * @package VkSdk\Ads\Includes
 */
class Rules
{

    use AutoFillObject;

    /**
     * @var Paragraphs[]
     */
    public $paragraphs;

    /**
     * @var string
     */
    public $title;

    /**
     * @return $this
     *
     * @param Paragraphs $paragraph
     */
    public function addParagraph(Paragraphs $paragraph)
    {
        $this->paragraphs[] = $paragraph;

        return $this;
    }

    /**
     * @return Paragraphs[]
     */
    public function getParagraphs()
    {
        return $this->paragraphs;
    }

    /**
     * @return $this
     *
     * @param array $paragraphs
     */
    public function setParagraphs(array $paragraphs)
    {
        $this->paragraphs = $paragraphs;

        return $this;
    }

    /**
     * Comment
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'paragraphs' => [
                'class'  => 'VkSdk\Ads\Includes\Paragraphs',
                'method' => 'addParagraph'
            ],
        ];
    }
}
