<?php
namespace VkSdk\Base;

/**
 * Class RepostsInfo
 *
 * @package VkSdk\Base
 */
class RepostsInfo
{

    /**
     * @var integer
     */
    public $count;

    /**
     * @var integer
     */
    public $user_reposted;

    /**
     * Reposts number
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
     * Information whether current user has reposted the post
     *
     * @return integer
     */
    public function getUserReposted()
    {
        return $this->user_reposted;
    }

    /**
     * @return $this
     *
     * @param integer $user_reposted
     */
    public function setUserReposted($user_reposted)
    {
        $this->user_reposted = $user_reposted;

        return $this;
    }
}
