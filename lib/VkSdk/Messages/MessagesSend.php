<?php

namespace VkSdk\Messages;

use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\MessagesAttachment;

class MessagesSend extends Request
{
    private $user_ids = [];
    private $message_id;
    private $attachments = [];
    private $forward_messages = [];

    public function getMessageId()
    {
        return $this->message_id;
    }

    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;
        return $this;
    }

    public function setDomain($domain)
    {
        $this->vkarg_domain = $domain;
        return $this;
    }

    public function setChatId($chat_id)
    {
        $this->vkarg_chat_id = $chat_id;
        return $this;
    }

    public function setUserIds($user_ids)
    {
        if (is_array($user_ids)) {
            $this->user_ids = $user_ids;
        } else {
            $this->user_ids[] = $user_ids;
        }
        return $this;
    }

    public function setMessage($message)
    {
        $this->vkarg_message = $message;
        return $this;
    }

    public function setGuid($guid)
    {
        $this->vkarg_guid = $guid;
        return $this;
    }

    public function setLat($lat)
    {
        $this->vkarg_lat = $lat;
        return $this;
    }

    public function setLong($long)
    {
        $this->vkarg_long = $long;
        return $this;
    }

    public function setFormwardMessages($forward_messages)
    {
        if (is_array($forward_messages)) {
            $this->forward_messages = $forward_messages;
        } else {
            $this->forward_messages[] = $forward_messages;
        }
        return $this;
    }

    public function addAttachment(MessagesAttachment $attachments)
    {
        return $this->attachments[] = $attachments;
    }

    public function doRequest()
    {
        $this->setMethod("messages.send");

        $attachments = "";

        if ($this->attachments) {
            $first = true;
            foreach ($this->attachments as $attach) {
                if (!$first) {
                    $attachments .= ",";
                }
                $attachments .= $attach->getAttachment();
                $first = false;
            }
        }

        $this->setRequiredParams(array('message', 'attachment'));

        if ($attachments) {
            $this->setParameter("attachment", $attachments);
        }
        if ($this->user_ids) {
            $this->setParameter("user_ids", implode(",", $this->user_ids));
        }
        if ($this->forward_messages) {
            $this->setParameter("forward_messages", implode(",", $this->forward_messages));
        }


        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (isset($json->response) && $json->response) {
            $this->message_id = $json->response;
            return true;
        }

        return false;
    }
}
