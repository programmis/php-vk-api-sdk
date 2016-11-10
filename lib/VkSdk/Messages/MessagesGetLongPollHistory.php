<?php
namespace VkSdk\Messages;

use VkSdk\Includes\Request;

/**
 * Returns updates in user's private messages.
 * Class MessagesGetLongPollHistory
 *
 * @package VkSdk\Messages
 */
class MessagesGetLongPollHistory extends Request
{

    /**
     * @var array(array)
     */
    public $history;

    /**
     * @var object
     */
    public $messages;

    /**
     * Additional  to return.
     *
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->vkarg_fields[] = $field;

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
     * @return array(array)[]
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * @return object
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "messages.getLongPollHistory";
    }

    /**
     * Maximum nimber of events to return.
     *
     * @return $this
     *
     * @param integer $events_limit
     */
    public function setEventsLimit($events_limit)
    {
        $this->vkarg_events_limit = $events_limit;

        return $this;
    }

    /**
     * Additional  to return.
     *
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->vkarg_fields = $fields;

        return $this;
    }

    /**
     * Maximum ID of the message among existing ones in the local copy. Both messages received with API methods (for example, , ), and data received from a Long Poll server (events with code 4) are taken into account.
     *
     * @return $this
     *
     * @param integer $max_msg_id
     */
    public function setMaxMsgId($max_msg_id)
    {
        $this->vkarg_max_msg_id = $max_msg_id;

        return $this;
    }

    /**
     * Maximum number of messages to return.
     *
     * @return $this
     *
     * @param integer $msgs_limit
     */
    public function setMsgsLimit($msgs_limit)
    {
        $this->vkarg_msgs_limit = $msgs_limit;

        return $this;
    }

    /**
     * '1' — to return history with online users only.
     *
     * @return $this
     *
     * @param boolean $onlines
     */
    public function setOnlines($onlines)
    {
        $this->vkarg_onlines = $onlines;

        return $this;
    }

    /**
     * Number of characters after which to truncate a previewed message. To preview the full message, specify '0'.; "NOTE: Messages are not truncated by default. Messages are truncated by words."
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
     * Lsat value of 'pts' parameter returned from the Long Poll server or by using  method.
     *
     * @return $this
     *
     * @param integer $pts
     */
    public function setPts($pts)
    {
        $this->vkarg_pts = $pts;

        return $this;
    }

    /**
     * Last value of the 'ts' parameter returned from the Long Poll server or by using  method.
     *
     * @return $this
     *
     * @param integer $ts
     */
    public function setTs($ts)
    {
        $this->vkarg_ts = $ts;

        return $this;
    }
}
