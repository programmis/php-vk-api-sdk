<?php
namespace VkSdk\Photos\Includes;

use lib\AutoFillObject;
use VkSdk\Base\LikesInfo;
use VkSdk\Wall\Includes\CommentAttachment;

/**
 * Class CommentXtrPid
 *
 * @package VkSdk\Photos\Includes
 */
class CommentXtrPid
{

    use AutoFillObject;

    /**
     * @var CommentAttachment[]
     */
    public $attachments;

    /**
     * @var integer
     */
    public $date;

    /**
     * @var integer
     */
    public $from_id;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var LikesInfo
     */
    public $likes;

    /**
     * @var integer
     */
    public $pid;

    /**
     * @var integer
     */
    public $reply_to_comment;

    /**
     * @var integer
     */
    public $reply_to_user;

    /**
     * @var string
     */
    public $text;

    /**
     * @return $this
     *
     * @param CommentAttachment $attachment
     */
    public function addAttachment(CommentAttachment $attachment)
    {
        $this->attachments[] = $attachment;

        return $this;
    }

    /**
     * @return CommentAttachment[]
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
     * Date when the comment has been added in Unixtime
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
     * Author ID
     *
     * @return integer
     */
    public function getFromId()
    {
        return $this->from_id;
    }

    /**
     * @return $this
     *
     * @param integer $from_id
     */
    public function setFromId($from_id)
    {
        $this->from_id = $from_id;

        return $this;
    }

    /**
     * Comment ID
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
     * @return LikesInfo
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @return $this
     *
     * @param LikesInfo $likes
     */
    public function setLikes(LikesInfo $likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Photo ID
     *
     * @return integer
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @return $this
     *
     * @param integer $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * Replied comment ID
     *
     * @return integer
     */
    public function getReplyToComment()
    {
        return $this->reply_to_comment;
    }

    /**
     * @return $this
     *
     * @param integer $reply_to_comment
     */
    public function setReplyToComment($reply_to_comment)
    {
        $this->reply_to_comment = $reply_to_comment;

        return $this;
    }

    /**
     * Replied user ID
     *
     * @return integer
     */
    public function getReplyToUser()
    {
        return $this->reply_to_user;
    }

    /**
     * @return $this
     *
     * @param integer $reply_to_user
     */
    public function setReplyToUser($reply_to_user)
    {
        $this->reply_to_user = $reply_to_user;

        return $this;
    }

    /**
     * Comment text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'likes'       => 'VkSdk\Base\LikesInfo',
            'attachments' => [
                'class'  => 'VkSdk\Wall\Includes\CommentAttachment',
                'method' => 'addAttachment'
            ],
        ];
    }
}
