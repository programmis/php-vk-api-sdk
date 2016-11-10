<?php
namespace VkSdk\Notifications\Includes;

/**
 * Class Reply
 *
 * @package VkSdk\Notifications\Includes
 */
class Reply
{

    /**
     * @var integer
     */
    public $date;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $text;

    /**
     * Date when the reply has been created in Unixtime
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return $this
     *
     * @param integer $date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Reply ID
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
     * Reply text
     *
     * @return integer
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return $this
     *
     * @param integer $text
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
}
