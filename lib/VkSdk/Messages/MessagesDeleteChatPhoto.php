<?php
namespace VkSdk\Messages;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\Chat;

/**
 * Deletes a chat's cover picture.
 * Class MessagesDeleteChatPhoto
 *
 * @package VkSdk\Messages
 */
class MessagesDeleteChatPhoto extends Request
{

    use AutoFillObject;

    /**
     * @var Chat
     */
    public $chat;

    /**
     * @var integer
     */
    public $message_id;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["chat_id"]);

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
     * @return Chat
     */
    public function getChat()
    {
        return $this->chat;
    }

    /**
     * Service message ID
     *
     * @return integer
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "messages.deleteChatPhoto";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'chat' => 'VkSdk\Messages\Includes\Chat',
        ];
    }

    /**
     * Chat ID.
     *
     * @return $this
     *
     * @param integer $chat_id
     */
    public function setChatId($chat_id)
    {
        $this->vkarg_chat_id = $chat_id;

        return $this;
    }
}
