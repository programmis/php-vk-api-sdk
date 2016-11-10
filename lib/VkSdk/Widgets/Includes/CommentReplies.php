<?php
namespace VkSdk\Widgets\Includes;

/**
 * Class CommentReplies
 *
 * @package VkSdk\Widgets\Includes
 */
class CommentReplies
{

    /**
     * @var integer
     */
    public $can_post;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var CommentReplies[]
     */
    public $replies;

    /**
     * Information whether current user can comment the post
     *
     * @return integer
     */
    public function getCanPost()
    {
        return $this->can_post;
    }

    /**
     * @return $this
     *
     * @param integer $can_post
     */
    public function setCanPost($can_post)
    {
        $this->can_post = $can_post;

        return $this;
    }

    /**
     * Comments number
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
     * @return CommentReplies[]
     */
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * @return $this
     *
     * @param array $replies
     */
    public function setReplies(array $replies)
    {
        $this->replies = $replies;

        return $this;
    }
}
