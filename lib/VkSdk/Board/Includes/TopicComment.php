<?php
namespace VkSdk\Board\Includes;

use lib\AutoFillObject;
use VkSdk\Wall\Includes\CommentAttachment;

/**
 * Class TopicComment
 *
 * @package VkSdk\Board\Includes
 */
class TopicComment
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
     * @var integer
     */
    public $real_offset;

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
     * Real position of the comment
     *
     * @return integer
     */
    public function getRealOffset()
    {
        return $this->real_offset;
    }

    /**
     * @return $this
     *
     * @param integer $real_offset
     */
    public function setRealOffset($real_offset)
    {
        $this->real_offset = $real_offset;

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
            'attachments' => [
                'class'  => 'VkSdk\Wall\Includes\CommentAttachment',
                'method' => 'addAttachment'
            ],
        ];
    }
}
