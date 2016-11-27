<?php

namespace VkSdk\Polls\Includes;

use lib\AutoFillObject;

/**
 * Class Answer
 * @package VkSdk\Polls\Includes
 */
class Answer
{
    use AutoFillObject;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var number
     */
    public $rate;

    /**
     * @var string
     */
    public $text;

    /**
     * @var integer
     */
    public $votes;

    /**
     * Answer ID
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Answer rate in percents
     * @return number
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Answer text
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Votes number
     * @return integer
     */
    public function getVotes()
    {
        return $this->votes;
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
     * @return $this
     *
     * @param number $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
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
     * @return $this
     *
     * @param integer $votes
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;

        return $this;
    }
}
