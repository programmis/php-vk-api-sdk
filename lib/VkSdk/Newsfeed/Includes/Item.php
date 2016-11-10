<?php

namespace VkSdk\Newsfeed\Includes;

use lib\AutoFillObject;
use VkSdk\Base\CommentsInfo;
use VkSdk\Base\LikesInfo;

/**
 * Class Item
 * @package VkSdk\Newsfeed\Includes
 */
class Item
{

    use AutoFillObject;

    /**
     * @var CommentsInfo
     */
    private $comments;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var LikesInfo
     */
    private $likes;

    /**
     * @var integer
     */
    private $post_id;

    /**
     * @var integer
     */
    private $source_id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $type;

    /**
     * @return CommentsInfo
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @return $this
     *
     * @param CommentsInfo $comments
     */
    public function setComments(CommentsInfo $comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Date when item has been added in Unixtime
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
     * Topic post ID
     *
     * @return integer
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * @return $this
     *
     * @param integer $post_id
     */
    public function setPostId($post_id)
    {
        $this->post_id = $post_id;

        return $this;
    }

    /**
     * Item source ID
     *
     * @return integer
     */
    public function getSourceId()
    {
        return $this->source_id;
    }

    /**
     * @return $this
     *
     * @param integer $source_id
     */
    public function setSourceId($source_id)
    {
        $this->source_id = $source_id;

        return $this;
    }

    /**
     * Post text
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
     * Item type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'comments' => 'VkSdk\Base\CommentsInfo',
            'likes'    => 'VkSdk\Base\LikesInfo',
        ];
    }
}
