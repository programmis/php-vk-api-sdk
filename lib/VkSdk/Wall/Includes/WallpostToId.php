<?php
namespace VkSdk\Wall\Includes;

use lib\AutoFillObject;
use VkSdk\Base\CommentsInfo;
use VkSdk\Base\Geo;
use VkSdk\Base\LikesInfo;
use VkSdk\Base\RepostsInfo;

/**
 * Class WallpostToId
 *
 * @package VkSdk\Wall\Includes
 */
class WallpostToId
{

    use AutoFillObject;

    /**
     * @var WallpostAttachment[]
     */
    public $attachments;

    /**
     * @var CommentsInfo
     */
    public $comments;

    /**
     * @var integer
     */
    public $copy_owner_id;

    /**
     * @var integer
     */
    public $copy_post_id;

    /**
     * @var integer
     */
    public $date;

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
     * @var integer
     */
    public $post_id;

    /**
     * @var PostSource
     */
    public $post_source;

    /**
     * See constants of class PostType
     *
     * @var string
     */
    public $post_type;

    /**
     * @var RepostsInfo
     */
    public $reposts;

    /**
     * @var integer
     */
    public $signer_id;

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
     * ID of the source post owner
     *
     * @return integer
     */
    public function getCopyOwnerId()
    {
        return $this->copy_owner_id;
    }

    /**
     * @return $this
     *
     * @param integer $copy_owner_id
     */
    public function setCopyOwnerId($copy_owner_id)
    {
        $this->copy_owner_id = $copy_owner_id;

        return $this;
    }

    /**
     * ID of the source post
     *
     * @return integer
     */
    public function getCopyPostId()
    {
        return $this->copy_post_id;
    }

    /**
     * @return $this
     *
     * @param integer $copy_post_id
     */
    public function setCopyPostId($copy_post_id)
    {
        $this->copy_post_id = $copy_post_id;

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
     * wall post ID (if comment)
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
            'attachments' => [
                'class'  => 'VkSdk\Wall\Includes\WallpostAttachment',
                'method' => 'addAttachment'
            ],
            'geo'         => 'VkSdk\Base\Geo',
            'post_source' => 'VkSdk\Wall\Includes\PostSource',
            'comments'    => 'VkSdk\Base\CommentsInfo',
            'likes'       => 'VkSdk\Base\LikesInfo',
            'reposts'     => 'VkSdk\Base\RepostsInfo',
        ];
    }
}
