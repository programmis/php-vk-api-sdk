<?php

namespace VkSdk\Apps\Includes;

use lib\AutoFillObject;

/**
 * Class Leaderboard
 * @package VkSdk\Apps\Includes
 */
class Leaderboard
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $level;

    /**
     * @var integer
     */
    private $points;

    /**
     * @var integer
     */
    private $score;

    /**
     * @var integer
     */
    private $user_id;

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
