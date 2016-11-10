<?php
namespace VkSdk\Messages;

use VkSdk\Includes\Request;

/**
 * Sends a message.
 * Class MessagesSend
 *
 * @package VkSdk\Messages
 */
class MessagesSend extends Request
{

    /**
     * IDs of message recipients (if new conversation shall be started).
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function addUserId($user_id)
    {
        $this->vkarg_user_ids[] = $user_id;

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
        return "messages.send";
    }

    /**
     * (Required if 'message' is not set.) List of objects attached to the message, separated by commas, in the following format:; "<owner_id>_<media_id>"; '' — Type of media attachment:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; 'wall' — wall post; '<owner_id>' — ID of the media attachment owner.; '<media_id>' — media attachment ID.; ; Example:; "photo100172_166443618"
     *
     * @return $this
     *
     * @param string $attachment
     */
    public function setAttachment($attachment)
    {
        $this->vkarg_attachment = $attachment;

        return $this;
    }

    /**
     * ID of conversation the message will relate to.
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

    /**
     * User's short address (for example, 'illarionov').
     *
     * @return $this
     *
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->vkarg_domain = $domain;

        return $this;
    }

    /**
     * ID of forwarded messages, separated with a comma. Listed messages of the sender will be shown in the message body at the recipient's.; ; Example:; "123,431,544"
     *
     * @return $this
     *
     * @param string $forward_messages
     */
    public function setForwardMessages($forward_messages)
    {
        $this->vkarg_forward_messages = $forward_messages;

        return $this;
    }

    /**
     * Geographical latitude of a check-in, in degrees (from -90 to 90).
     *
     * @return $this
     *
     * @param number $lat
     */
    public function setLat(number $lat)
    {
        $this->vkarg_lat = $lat;

        return $this;
    }

    /**
     * Geographical longitude of a check-in, in degrees (from -180 to 180).
     *
     * @return $this
     *
     * @param number $long
     */
    public function setLong(number $long)
    {
        $this->vkarg_long = $long;

        return $this;
    }

    /**
     * (Required if 'attachments' is not set.) Text of the message.
     *
     * @return $this
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->vkarg_message = $message;

        return $this;
    }

    /**
     * '1' if the message is a notification (for community messages).
     *
     * @return $this
     *
     * @param boolean $notification
     */
    public function setNotification($notification)
    {
        $this->vkarg_notification = $notification;

        return $this;
    }

    /**
     * Destination ID.; ; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'chat_id', e.g. '2000000001'.; ; For community:; '- community ID', e.g. '-12345'.; "
     *
     * @return $this
     *
     * @param integer $peer_id
     */
    public function setPeerId($peer_id)
    {
        $this->vkarg_peer_id = $peer_id;

        return $this;
    }

    /**
     * Unique identifier to avoid resending the message.
     *
     * @return $this
     *
     * @param integer $random_id
     */
    public function setRandomId($random_id)
    {
        $this->vkarg_random_id = $random_id;

        return $this;
    }

    /**
     * Sticker id.
     *
     * @return $this
     *
     * @param integer $sticker_id
     */
    public function setStickerId($sticker_id)
    {
        $this->vkarg_sticker_id = $sticker_id;

        return $this;
    }

    /**
     * User ID (by default — current user).
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }

    /**
     * IDs of message recipients (if new conversation shall be started).
     *
     * @return $this
     *
     * @param array $user_ids
     */
    public function setUserIds(array $user_ids)
    {
        $this->vkarg_user_ids = $user_ids;

        return $this;
    }
}
