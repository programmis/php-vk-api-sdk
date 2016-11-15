<?php

namespace VkSdk\Messages;

use VkSdk\Includes\Request;

/**
 * Deletes one or more messages.
 *
 * Class MessagesDelete
 * @package VkSdk\Messages
 */
class MessagesDelete extends Request
{
    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

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
     * result in $this->getResponse();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->response = $json->response;

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
        return "messages.delete";
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

    /**
     * '1' — to mark message as spam.
     *
     * @return $this
     *
     * @param boolean $spam
     */
    public function setSpam($spam)
    {
        $this->vkarg_spam = $spam;

        return $this;
    }
}
