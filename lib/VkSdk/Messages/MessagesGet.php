<?php
namespace VkSdk\Messages;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\Message;

/**
 * Returns a list of the current user's incoming or outgoing private messages.
 * Class MessagesGet
 *
 * @package VkSdk\Messages
 */
class MessagesGet extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Message[]
     */
    public $items;

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
        return "messages.get";
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
     * ID of the message received before the message that will be returned last (provided that no more than 'count' messages were received before it; otherwise 'offset' parameter shall be used).
     *
     * @return $this
     *
     * @param integer $last_message_id
     */
    public function setLastMessageId($last_message_id)
    {
        $this->vkarg_last_message_id = $last_message_id;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of messages.
     *
     *@return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * '1' — to return outgoing messages; '0' — to return incoming messages (default)
     *
     * @return $this


*
*@param boolean $out
     */
    public function setOut($out)
    {
        $this->vkarg_out = $out;

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
     * Maximum time since a message was sent, in seconds. To return messages without a time limitation, set as '0'.
     *
     * @return $this
     *
     * @param integer $time_offset
     */
    public function setTimeOffset($time_offset)
    {
        $this->vkarg_time_offset = $time_offset;

        return $this;
    }
}
