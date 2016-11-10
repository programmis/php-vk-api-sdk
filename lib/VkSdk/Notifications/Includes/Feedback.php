<?php
namespace VkSdk\Notifications\Includes;

use lib\AutoFillObject;
use VkSdk\Base\Geo;
use VkSdk\Base\LikesInfo;
use VkSdk\Wall\Includes\WallpostAttachment;

/**
 * Class Feedback
 *
 * @package VkSdk\Notifications\Includes
 */
class Feedback
{

    use AutoFillObject;

    /**
     * @var WallpostAttachment[]
     */
    public $attachments;

    /**
     * @var integer
     */
    public $from_id;

    /**
     * @var Geo
     */
    public $geo;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var LikesInfo
     */
    public $likes;

    /**
     * @var string
     */
    public $text;

    /**
     * @var integer
     */
    public $to_id;

    /**
     * @return $this
     *
     * @param WallpostAttachment $attachment
     */
    public function addAttachment(WallpostAttachment $attachment)
    {
        $this->attachments[] = $attachment;

        return $this;
    }

    /**
     * @return WallpostAttachment[]
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
     * Reply author's ID
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
     * Item ID
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
     * Reply text
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
     * Wall owner's ID
     *
     * @return integer
     */
    public function getToId()
    {
        return $this->to_id;
    }

    /**
     * @return $this
     *
     * @param integer $to_id
     */
    public function setToId($to_id)
    {
        $this->to_id = $to_id;

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
                'class'  => 'VkSdk\Wall\Includes\WallpostAttachment',
                'method' => 'addAttachment'
            ],
            'geo'         => 'VkSdk\Base\Geo',
        ];
    }
}
