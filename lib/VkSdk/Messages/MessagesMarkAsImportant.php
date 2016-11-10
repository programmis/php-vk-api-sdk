<?php

namespace VkSdk\Messages;

use VkSdk\Includes\Request;

/**
 * Marks and unmarks messages as important (starred).
 * Class MessagesMarkAsImportant
 * @package VkSdk\Messages
 */
class MessagesMarkAsImportant extends Request
{

    /**
     * IDs of messages to mark as important.
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
        return "messages.markAsImportant";
    }

    /**
     * '1' — to add a star (mark as important); '0' — to remove the star
     *
     * @return $this
     *
     * @param integer $important
     */
    public function setImportant($important)
    {
        $this->vkarg_important = $important;

        return $this;
    }

    /**
     * IDs of messages to mark as important.
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
