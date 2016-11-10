<?php
namespace VkSdk\Messages;

use VkSdk\Includes\Request;

/**
 * Restores a deleted message.
 * Class MessagesRestore
 *
 * @package VkSdk\Messages
 */
class MessagesRestore extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["message_id"]);

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
        return "messages.restore";
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
     * ID of a previously-deleted message to restore.
     *
     * @return $this
     *
     * @param integer $message_id
     */
    public function setMessageId($message_id)
    {
        $this->vkarg_message_id = $message_id;

        return $this;
    }
}
