<?php

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;

/**
 * Class LastSeen
 * @package VkSdk\Users\Includes
 */
class LastSeen
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $platform;

    /**
     * @var integer
     */
    private $time;

    /**
     * Type of the platform that used for the last authorization
     *
     * @return integer
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @return $this
     *
     * @param integer $platform
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Last visit date (in Unix time)
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
