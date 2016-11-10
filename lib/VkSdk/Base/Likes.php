<?php

namespace VkSdk\Base;

use lib\AutoFillObject;

/**
 * Class Likes
 * @package VkSdk\Base
 */
class Likes
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $user_likes;

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
     * Information whether current user likes the photo
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
