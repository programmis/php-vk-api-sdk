<?php

namespace VkSdk\Messages\Includes;

use lib\AutoFillObject;

/**
 * Class Dialog
 * @package VkSdk\Messages\Includes
 */
class Dialog
{
    use AutoFillObject;

    /**
     * @var integer
     */
    private $in_read;

    /**
     * @var Message
     */
    private $message;

    /**
     * @var integer
     */
    private $out_read;

    /**
     * @var integer
     */
    private $unread;

    /**
     * ID of the last message read by current user
     *
     * @return integer
     */
    public function getInRead()
    {
        return $this->in_read;
    }

    /**
     * @return $this
     *
     * @param integer $in_read
     */
    public function setInRead($in_read)
    {
        $this->in_read = $in_read;

        return $this;
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return $this
     *
     * @param Message $message
     */
    public function setMessage(Message $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * ID of the last message read by the others
     *
     * @return integer
     */
    public function getOutRead()
    {
        return $this->out_read;
    }

    /**
     * @return $this
     *
     * @param integer $out_read
     */
    public function setOutRead($out_read)
    {
        $this->out_read = $out_read;

        return $this;
    }

    /**
     * Information whether unread messages are in the dialog
     *
     * @return integer
     */
    public function getUnread()
    {
        return $this->unread;
    }

    /**
     * @return $this
     *
     * @param integer $unread
     */
    public function setUnread($unread)
    {
        $this->unread = $unread;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'message' => 'VkSdk\Messages\Includes\Message',
        ];
    }
}
