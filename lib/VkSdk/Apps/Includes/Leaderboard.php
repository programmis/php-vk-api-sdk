<?php
namespace VkSdk\Apps\Includes;

/**
 * Class Leaderboard
 *
 * @package VkSdk\Apps\Includes
 */
class Leaderboard
{

    /**
     * @var integer
     */
    public $level;

    /**
     * @var integer
     */
    public $points;

    /**
     * @var integer
     */
    public $score;

    /**
     * @var integer
     */
    public $user_id;

    /**
     * Level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return $this
     *
     * @param integer $level
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Points number
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @return $this
     *
     * @param integer $points
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Score number
     *
     * @return integer
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @return $this
     *
     * @param integer $score
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * User ID
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }
}
