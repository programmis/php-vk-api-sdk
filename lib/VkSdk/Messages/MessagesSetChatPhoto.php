<?php
namespace VkSdk\Messages;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\Chat;

/**
 * Sets a previously-uploaded picture as the cover picture of a chat.
 * Class MessagesSetChatPhoto
 *
 * @package VkSdk\Messages
 */
class MessagesSetChatPhoto extends Request
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
        $this->setRequiredParams(["file"]);

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
        return "messages.setChatPhoto";
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
     * Upload URL from the 'response' field returned by the  method upon successfully uploading an image.
     *
     * @return $this
     *
     * @param string $file
     */
    public function setFile($file)
    {
        $this->vkarg_file = $file;

        return $this;
    }
}
