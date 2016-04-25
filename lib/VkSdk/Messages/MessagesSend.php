<?php

namespace VkSdk\Messages;

use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\MessagesAttachments;

class MessagesSend extends Request
{

    private $user_id;
    private $domain;
    private $chat_id;
    private $user_ids = array();
    private $message;
    private $message_id;
    private $guid;
    private $lat;
    private $long;
    private $attachments = array();
    private $forward_messages = array();

    public function getMessageId()
    {
        return $this->message_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    public function setChatId($chat_id)
    {
        $this->chat_id = $chat_id;
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
        $this->message = $message;
        return $this;
    }

    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    public function setLat($lat)
    {
        $this->lat = $lat;
        return $this;
    }

    public function setLong($long)
    {
        $this->long = $long;
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

    public function addAttachment(MessagesAttachments $attachments)
    {
        return $this->attachments[] = $attachments;
    }

    public function doRequest()
    {
        $this->setRequiredParams('message');
        $this->setRequiredParams('attachment');
        
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

        if ($attachments) {
            $this->setParameter("attachment", $attachments);
        }
        if ($this->message) {
            $this->setParameter("message", $this->message);
        }
        if ($this->lat) {
            $this->setParameter("lat", $this->lat);
        }
        if ($this->long) {
            $this->setParameter("long", $this->long);
        }
        if ($this->user_id) {
            $this->setParameter("user_id", $this->user_id);
        }
        if ($this->domain) {
            $this->setParameter("domain", $this->domain);
        }
        if ($this->chat_id) {
            $this->setParameter("chat_id", $this->chat_id);
        }
        if ($this->guid) {
            $this->setParameter("guid", $this->guid);
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