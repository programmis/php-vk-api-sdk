<?php

namespace VkSdk\Messages\Includes;

use lib\AutoFillObject;
use VkSdk\Base\Geo;

/**
 * Class Message
 * @package VkSdk\Messages\Includes
 */
class Message
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $admin_id;

    /**
     * @var Message[]
     */
    private $attachments;

    /**
     * @var string
     */
    private $body;

    /**
     * @var array
     */
    private $chat_active;

    /**
     * @var integer
     */
    private $chat_id;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var Message[]
     */
    private $fwd_messages;

    /**
     * @var Geo
     */
    private $geo;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $important;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $out;

    /**
     * @var string
     */
    private $photo_100;

    /**
     * @var string
     */
    private $photo_200;

    /**
     * @var string
     */
    private $photo_50;

    /**
     * @var integer
     */
    private $random_id;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $read_state;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * @var integer
     */
    private $users_count;

    /**
     * Chat administrator ID
     *
     * @return integer
     */
    public function getAdminId()
    {
        return $this->admin_id;
    }

    /**
     * @return $this
     *
     * @param integer $admin_id
     */
    public function setAdminId($admin_id)
    {
        $this->admin_id = $admin_id;

        return $this;
    }

    /**
     * @return Message[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @return $this
     *
     * @param array $attachments
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Message text
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return $this
     *
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return array
     */
    public function getChatActive()
    {
        return $this->chat_active;
    }

    /**
     * @return $this
     *
     * @param array $chat_active
     */
    public function setChatActive(array $chat_active)
    {
        $this->chat_active = $chat_active;

        return $this;
    }

    /**
     * Chat ID
     *
     * @return integer
     */
    public function getChatId()
    {
        return $this->chat_id;
    }

    /**
     * @return $this
     *
     * @param integer $chat_id
     */
    public function setChatId($chat_id)
    {
        $this->chat_id = $chat_id;

        return $this;
    }

    /**
     * Date when the message has been sent in Unixtime
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return $this
     *
     * @param integer $date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Is it an deleted message
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @return $this
     *
     * @param boolean $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Forwarded messages
     *
     * @return Message[]
     */
    public function getFwdMessages()
    {
        return $this->fwd_messages;
    }

    /**
     * @return $this
     *
     * @param array $fwd_messages
     */
    public function setFwdMessages(array $fwd_messages)
    {
        $this->fwd_messages = $fwd_messages;

        return $this;
    }

    /**
     * @return Geo
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @return $this
     *
     * @param Geo $geo
     */
    public function setGeo(Geo $geo)
    {
        $this->geo = $geo;

        return $this;
    }

    /**
     * Message ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Is it an important message
     *
     * @return boolean
     */
    public function getImportant()
    {
        return $this->important;
    }

    /**
     * @return $this
     *
     * @param boolean $important
     */
    public function setImportant($important)
    {
        $this->important = $important;

        return $this;
    }

    /**
     * Information whether the message is outcoming
     *
     * @return integer
     */
    public function getOut()
    {
        return $this->out;
    }

    /**
     * @return $this
     *
     * @param integer $out
     */
    public function setOut($out)
    {
        $this->out = $out;

        return $this;
    }

    /**
     * URL of the preview image with 100px in width
     *
     * @return string
     */
    public function getPhoto100()
    {
        return $this->photo_100;
    }

    /**
     * @return $this
     *
     * @param string $photo_100
     */
    public function setPhoto100($photo_100)
    {
        $this->photo_100 = $photo_100;

        return $this;
    }

    /**
     * URL of the preview image with 200px in width
     *
     * @return string
     */
    public function getPhoto200()
    {
        return $this->photo_200;
    }

    /**
     * @return $this
     *
     * @param string $photo_200
     */
    public function setPhoto200($photo_200)
    {
        $this->photo_200 = $photo_200;

        return $this;
    }

    /**
     * URL of the preview image with 50px in width
     *
     * @return string
     */
    public function getPhoto50()
    {
        return $this->photo_50;
    }

    /**
     * @return $this
     *
     * @param string $photo_50
     */
    public function setPhoto50($photo_50)
    {
        $this->photo_50 = $photo_50;

        return $this;
    }

    /**
     * ID used for sending messages. It returned only for outgoing messages
     *
     * @return integer
     */
    public function getRandomId()
    {
        return $this->random_id;
    }

    /**
     * @return $this
     *
     * @param integer $random_id
     */
    public function setRandomId($random_id)
    {
        $this->random_id = $random_id;

        return $this;
    }

    /**
     * Information whether the messages is read
     *
     * @return integer
     */
    public function getReadState()
    {
        return $this->read_state;
    }

    /**
     * @return $this
     *
     * @param integer $read_state
     */
    public function setReadState($read_state)
    {
        $this->read_state = $read_state;

        return $this;
    }

    /**
     * Message title or chat title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Message author's ID
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Chat users number
     *
     * @return integer
     */
    public function getUsersCount()
    {
        return $this->users_count;
    }

    /**
     * @return $this
     *
     * @param integer $users_count
     */
    public function setUsersCount($users_count)
    {
        $this->users_count = $users_count;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'geo' => 'VkSdk\Base\Geo',
        ];
    }
}
