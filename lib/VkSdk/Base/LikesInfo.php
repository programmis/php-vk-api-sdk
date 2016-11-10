<?php

namespace VkSdk\Base;

use lib\AutoFillObject;

/**
 * Class LikesInfo
 * @package VkSdk\Base
 */
class LikesInfo
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $can_like;

    /**
     * @var integer
     */
    private $can_publish;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var integer
     */
    private $user_likes;

    /**
     * Information whether current user can like the post
     *
     * @return integer
     */
    public function getCanLike()
    {
        return $this->can_like;
    }

    /**
     * @return $this
     *
     * @param integer $can_like
     */
    public function setCanLike($can_like)
    {
        $this->can_like = $can_like;

        return $this;
    }

    /**
     * Information whether current user can repost
     *
     * @return integer
     */
    public function getCanPublish()
    {
        return $this->can_publish;
    }

    /**
     * @return $this
     *
     * @param integer $can_publish
     */
    public function setCanPublish($can_publish)
    {
        $this->can_publish = $can_publish;

        return $this;
    }

    /**
     * Likes number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Information whether current uer has liked the post
     *
     * @return integer
     */
    public function getUserLikes()
    {
        return $this->user_likes;
    }

    /**
     * @return $this
     *
     * @param integer $user_likes
     */
    public function setUserLikes($user_likes)
    {
        $this->user_likes = $user_likes;

        return $this;
    }
}
