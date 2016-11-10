<?php

namespace VkSdk\Widgets\Includes;

use lib\AutoFillObject;
use VkSdk\Base\LikesInfo;
use VkSdk\Base\RepostsInfo;
use VkSdk\Users\Includes\UserFull;
use VkSdk\Wall\Includes\CommentAttachment;
use VkSdk\Wall\Includes\PostSource;

/**
 * Class WidgetComment
 * @package VkSdk\Widgets\Includes
 */
class WidgetComment
{

    use AutoFillObject;

    /**
     * @var CommentAttachment[]
     */
    private $attachments;

    /**
     * @var integer
     */
    private $can_delete;

    /**
     * @var CommentReplies
     */
    private $comments;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var integer
     */
    private $from_id;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var LikesInfo
     */
    private $likes;

    /**
     * @var CommentMedia
     */
    private $media;

    /**
     * @var PostSource
     */
    private $post_source;

    /**
     * @var integer
     */
    private $post_type;

    /**
     * @var RepostsInfo
     */
    private $reposts;

    /**
     * @var string
     */
    private $text;

    /**
     * @var integer
     */
    private $to_id;

    /**
     * @var UserFull
     */
    private $user;

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
     * Information whether current user can delete the comment
     *
     * @return integer
     */
    public function getCanDelete()
    {
        return $this->can_delete;
    }

    /**
     * @return $this
     *
     * @param integer $can_delete
     */
    public function setCanDelete($can_delete)
    {
        $this->can_delete = $can_delete;

        return $this;
    }

    /**
     * @return CommentReplies
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @return $this
     *
     * @param CommentReplies $comments
     */
    public function setComments(CommentReplies $comments)
    {
        $this->comments = $comments;

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
     * Comment author ID
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
     * @return CommentMedia
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @return $this
     *
     * @param CommentMedia $media
     */
    public function setMedia(CommentMedia $media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * @return PostSource
     */
    public function getPostSource()
    {
        return $this->post_source;
    }

    /**
     * @return $this
     *
     * @param PostSource $post_source
     */
    public function setPostSource(PostSource $post_source)
    {
        $this->post_source = $post_source;

        return $this;
    }

    /**
     * Post type
     *
     * @return integer
     */
    public function getPostType()
    {
        return $this->post_type;
    }

    /**
     * @return $this
     *
     * @param integer $post_type
     */
    public function setPostType($post_type)
    {
        $this->post_type = $post_type;

        return $this;
    }

    /**
     * @return RepostsInfo
     */
    public function getReposts()
    {
        return $this->reposts;
    }

    /**
     * @return $this
     *
     * @param RepostsInfo $reposts
     */
    public function setReposts(RepostsInfo $reposts)
    {
        $this->reposts = $reposts;

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
     * Wall owner
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
     * @return UserFull
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return $this
     *
     * @param UserFull $user
     */
    public function setUser(UserFull $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'user'        => 'VkSdk\Users\Includes\UserFull',
            'media'       => 'VkSdk\Widgets\Includes\CommentMedia',
            'attachments' => [
                'class'  => 'VkSdk\Wall\Includes\CommentAttachment',
                'method' => 'addAttachment'
            ],
            'post_source' => 'VkSdk\Wall\Includes\PostSource',
            'comments'    => 'VkSdk\Widgets\Includes\CommentReplies',
            'likes'       => 'VkSdk\Base\LikesInfo',
            'reposts'     => 'VkSdk\Base\RepostsInfo',
        ];
    }
}
