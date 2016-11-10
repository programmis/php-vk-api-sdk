<?php
namespace VkSdk\Messages;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\Message;

/**
 * Returns messages by their IDs.
 * Class MessagesGetById
 *
 * @package VkSdk\Messages
 */
class MessagesGetById extends Request
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
     * Message IDs.
     *
     * @return $this
     *
     * @param integer $message_id
     */
    public function addMessageId($message_id)
    {
        $this->vkarg_message_ids[] = $message_id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["message_ids"]);

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
        return "messages.getById";
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
     * Message IDs.
     *
     * @return $this
     *
     * @param array $message_ids
     */
    public function setMessageIds(array $message_ids)
    {
        $this->vkarg_message_ids = $message_ids;

        return $this;
    }
}
