<?php

namespace VkSdk\Messages;

use VkSdk\Includes\Request;

/**
 * Marks messages as read.
 * Class MessagesMarkAsRead
 * @package VkSdk\Messages
 */
class MessagesMarkAsRead extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * IDs of messages to mark as read.
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
     * @inheritdoc
     */
    public function getMethod()
    {
        return "messages.markAsRead";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * IDs of messages to mark as read.
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

    /**
     * Destination ID.; ; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'chat_id', e.g. '2000000001'.; ; For community:; '- community ID', e.g. '-12345'.; "
     *
     * @return $this
     *
     * @param string $peer_id
     */
    public function setPeerId($peer_id)
    {
        $this->vkarg_peer_id = $peer_id;

        return $this;
    }

    /**
     * Message ID to start from.
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
}
