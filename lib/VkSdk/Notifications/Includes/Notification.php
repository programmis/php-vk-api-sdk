<?php
namespace VkSdk\Notifications\Includes;

use lib\AutoFillObject;

/**
 * Class Notification
 *
 * @package VkSdk\Notifications\Includes
 */
class Notification
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $date;

    /**
     * @var Feedback
     */
    public $feedback;
    public $parent;

    /**
     * @var Reply
     */
    public $reply;

    /**
     * @var string
     */
    public $type;

    /**
     * Date when the event has been occured
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
     * @return Feedback
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * @return $this
     *
     * @param Feedback $feedback
     */
    public function setFeedback(Feedback $feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * @return
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @return $this
     *
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return Reply
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * @return $this
     *
     * @param Reply $reply
     */
    public function setReply(Reply $reply)
    {
        $this->reply = $reply;

        return $this;
    }

    /**
     * Notification type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'feedback' => 'VkSdk\Notifications\Includes\Feedback',
            'reply'    => 'VkSdk\Notifications\Includes\Reply',
        ];
    }
}
