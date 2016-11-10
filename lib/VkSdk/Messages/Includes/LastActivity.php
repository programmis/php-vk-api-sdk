<?php

namespace VkSdk\Messages\Includes;

use lib\AutoFillObject;

/**
 * Class LastActivity
 * @package VkSdk\Messages\Includes
 */
class LastActivity
{

    use AutoFillObject;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $online;

    /**
     * @var integer
     */
    private $time;

    /**
     * Information whether user is online
     *
     * @return integer
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * @return $this
     *
     * @param integer $online
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Time when user was online in Unixtime
     *
     * @return integer
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @return $this
     *
     * @param integer $time
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }
}
