<?php
namespace VkSdk\Account\Includes;

/**
 * Class Offer
 *
 * @package VkSdk\Account\Includes
 */
class Offer
{

    /**
     * @var string
     */
    public $description;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $img;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var string
     */
    public $instruction_html;

    /**
     * @var integer
     */
    public $price;

    /**
     * @var string
     */
    public $short_description;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $title;

    /**
     * Offer description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return $this
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Offer ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * URL of the preview image
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @return $this
     *
     * @param string $img
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Instruction how to process the offer
     *
     * @return string
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * @return $this
     *
     * @param string $instruction
     */
    public function setInstruction($instruction)
    {
        $this->instruction = $instruction;

        return $this;
    }

    /**
     * Instruction how to process the offer (HTML format)
     *
     * @return string
     */
    public function getInstructionHtml()
    {
        return $this->instruction_html;
    }

    /**
     * @return $this
     *
     * @param string $instruction_html
     */
    public function setInstructionHtml($instruction_html)
    {
        $this->instruction_html = $instruction_html;

        return $this;
    }

    /**
     * Offer price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return $this
     *
     * @param integer $price
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Offer short description
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->short_description;
    }

    /**
     * @return $this
     *
     * @param string $short_description
     */
    public function setShortDescription($short_description)
    {
        $this->short_description = $short_description;

        return $this;
    }

    /**
     * Offer tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @return $this
     *
     * @param string $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Offer title
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
}
