<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 04.11.16
 * Time: 22:04
 */

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;

/**
 * время последнего посещения
 *
 * Class UserLastSeen
 * @package VkSdk\Users\Includes
 */
class UserLastSeen
{
    use AutoFillObject;

    /** мобильная версия; */
    const PLATFORM_MOBILE = 1;
    /** приложение для iPhone; */
    const PLATFORM_IPHONE = 2;
    /** приложение для iPad; */
    const PLATFORM_IPAD = 3;
    /** приложение для Android; */
    const PLATFORM_ANDROID = 4;
    /** приложение для Windows Phone; */
    const PLATFORM_WINDOWS_PHONE = 5;
    /** приложение для Windows 8; */
    const PLATFORM_WINDOWS_8 = 6;
    /** полная версия сайта. */
    const PLATFORM_FULL_SITE = 7;

    /** @var int $time */
    private $time;
    /** @var int $platform */
    private $platform;

    /**
     * время последнего посещения в формате Unixtime.
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param int $time
     *
     * @return UserLastSeen
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * тип платформы, через которую был осуществлён
     * последний вход. см. PLATFORM_* константы
     *
     * @return int
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param int $platform
     *
     * @return UserLastSeen
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;

        return $this;
    }
}
