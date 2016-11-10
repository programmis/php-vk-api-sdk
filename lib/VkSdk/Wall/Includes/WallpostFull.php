<?php

namespace VkSdk\Wall\Includes;

use lib\AutoFillObject;
use VkSdk\Base\CommentsInfo;
use VkSdk\Base\Geo;
use VkSdk\Base\LikesInfo;
use VkSdk\Base\RepostsInfo;

/**
 * Class WallpostFull
 * @package VkSdk\Wall\Includes
 */
class WallpostFull
{

    use AutoFillObject;

    /**
     * @var WallpostAttachment[]
     */
    private $attachments;

    /**
     * @var integer
     */
    private $can_delete;

    /**
     * @var integer
     */
    private $can_edit;

    /**
     * @var integer
     */
    private $can_pin;

    /**
     * @var CommentsInfo
     */
    private $comments;

    /**
     * @var Wallpost[]
     */
    private $copy_history;

    /**
     * @var integer
     */
    private $created_by;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var integer
     */
    private $from_id;

    /**
     * @var Geo
     */
    private $geo;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $is_pinned;

    /**
     * @var LikesInfo
     */
    private $likes;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var PostSource
     */
    private $post_source;

    /**
     * See constants of class PostType
     *
     * @var string
     */
    private $post_type;

    /**
     * @var RepostsInfo
     */
    private $reposts;

    /**
     * @var integer
     */
    private $signer_id;

    /**
     * @var string
     */
    private $text;

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
     * @return $this
     *
     * @param Wallpost $copy_history
     */
    public function addCopyHistory(Wallpost $copy_history)
    {
        $this->copy_history[] = $copy_history;

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
     * Information whether current user can delete the post
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
     * Information whether current user can edit the post
     *
     * @return integer
     */
    public function getCanEdit()
    {
        return $this->can_edit;
    }

    /**
     * @return $this
     *
     * @param integer $can_edit
     */
    public function setCanEdit($can_edit)
    {
        $this->can_edit = $can_edit;

        return $this;
    }

    /**
     * Information whether current user can pin the post
     *
     * @return integer
     */
    public function getCanPin()
    {
        return $this->can_pin;
    }

    /**
     * @return $this
     *
     * @param integer $can_pin
     */
    public function setCanPin($can_pin)
    {
        $this->can_pin = $can_pin;

        return $this;
    }

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
     * @return Wallpost[]
     */
    public function getCopyHistory()
    {
        return $this->copy_history;
    }

    /**
     * @return $this
     *
     * @param array $copy_history
     */
    public function setCopyHistory(array $copy_history)
    {
        $this->copy_history = $copy_history;

        return $this;
    }

    /**
     * Post creator ID (if post still can be edited)
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * @return $this
     *
     * @param integer $created_by
     */
    public function setCreatedBy($created_by)
    {
        $this->created_by = $created_by;

        return $this;
    }

    /**
     * Date of publishing in Unixtime
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
     * Post author ID
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
     * Post ID
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
     * Information whether the post is pinned
     *
     * @return integer
     */
    public function getIsPinned()
    {
        return $this->is_pinned;
    }

    /**
     * @return $this
     *
     * @param integer $is_pinned
     */
    public function setIsPinned($is_pinned)
    {
        $this->is_pinned = $is_pinned;

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
     * Wall owner's ID
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;

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
     * @return string
     */
    public function getPostType()
    {
        return $this->post_type;
    }

    /**
     * @return $this
     *
     * @param string $post_type
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
     * Post signer ID
     *
     * @return integer
     */
    public function getSignerId()
    {
        return $this->signer_id;
    }

    /**
     * @return $this
     *
     * @param integer $signer_id
     */
    public function setSignerId($signer_id)
    {
        $this->signer_id = $signer_id;

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
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'attachments'  => [
                'class'  => 'VkSdk\Wall\Includes\WallpostAttachment',
                'method' => 'addAttachment'
            ],
            'geo'          => 'VkSdk\Base\Geo',
            'post_source'  => 'VkSdk\Wall\Includes\PostSource',
            'copy_history' => [
                'class'  => 'VkSdk\Wall\Includes\Wallpost',
                'method' => 'addCopyHistory'
            ],
            'comments'     => 'VkSdk\Base\CommentsInfo',
            'likes'        => 'VkSdk\Base\LikesInfo',
            'reposts'      => 'VkSdk\Base\RepostsInfo',
        ];
    }
}
