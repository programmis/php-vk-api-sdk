<?php

namespace VkSdk\Messages;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\Message;

/**
 * Returns message history for the specified user or group chat.
 *
 * Class MessagesGetHistory
 * @package VkSdk\Messages
 */
class MessagesGetHistory extends Request
{
    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var Message[]
     */
    private $items;

    /**
     * @var integer
     */
    private $unread;

    /** @var int $in_read */
    private $in_read;

    /** @var int $out_read */
    private $out_read;

    /**
     * Id of last read inbound message
     *
     * @return int
     */
    public function getInRead()
    {
        return $this->in_read;
    }

    /**
     * Id of last read outbound message
     *
     * @return int
     */
    public function getOutRead()
    {
        return $this->out_read;
    }

    /**
     * @return $this
     *
     * @param Message $item
     */
    public function addItem(Message $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->fillByJson($json->response);

                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * Total number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of messages to return.
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * @return Message[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "messages.getHistory";
    }

    /**
     * Unread dialogs number
     *
     * @return integer
     */
    public function getUnread()
    {
        return $this->unread;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Messages\Includes\Message',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Offset needed to return a specific subset of messages.
     *
     * @return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $peer_id
     */
    public function setPeerId($peer_id)
    {
        $this->vkarg_peer_id = $peer_id;

        return $this;
    }

    /**
     * Sort order:; '1' — return messages in chronological order.; '0' — return messages in reverse chronological order.
     *
     * @return $this
     *
     * @param integer $rev
     */
    public function setRev($rev)
    {
        $this->vkarg_rev = $rev;

        return $this;
    }

    /**
     * Starting message ID from which to return history.
     *
     * @return $this
     *
     * @param integer $start_message_id
     */
    public function setStartMessageId($start_message_id)
    {
        $this->vkarg_start_message_id = $start_message_id;

        return $this;
    }

    /**
     * ID of the user whose message history you want to return.
     *
     * @return $this
     *
     * @param string $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
