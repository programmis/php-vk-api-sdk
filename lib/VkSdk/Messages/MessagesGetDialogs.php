<?php

namespace VkSdk\Messages;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\Dialog;

/**
 * Returns a list of the current user's conversations.
 * Class MessagesGetDialogs
 * @package VkSdk\Messages
 */
class MessagesGetDialogs extends Request
{
    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var Dialog[]
     */
    private $items;

    /**
     * @var integer
     */
    private $unread_dialogs;

    /**
     * @return $this
     *
     * @param Dialog $item
     */
    public function addItem(Dialog $item)
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
        return "5.63";
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
     * @return Dialog[]
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
        return "messages.getDialogs";
    }

    /**
     * Unread dialogs number
     *
     * @return integer
     */
    public function getUnreadDialogs()
    {
        return $this->unread_dialogs;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Messages\Includes\Dialog',
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
     * Number of characters after which to truncate a previewed message. To preview the full message, specify '0'.;
     * "NOTE: Messages are not truncated by default. Messages are truncated by words."
     *
     * @return $this
     *
     * @param integer $preview_length
     */
    public function setPreviewLength($preview_length)
    {
        $this->vkarg_preview_length = $preview_length;

        return $this;
    }

    /**
     * ID of the message from what to return dialogs.
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
     * '1' — return unread messages only.
     *
     * @return $this
     *
     * @param boolean $unread
     */
    public function setUnread($unread)
    {
        $this->vkarg_unread = $unread;

        return $this;
    }

    /**
     * 1 — вернуть диалоги с пометкой «Неотвеченные» (для сообщений сообществ)
     *
     * @return $this
     *
     * @param boolean $unanswered
     */
    public function setUnanswered($unanswered)
    {
        $this->vkarg_unanswered = $unanswered;

        return $this;
    }
}
