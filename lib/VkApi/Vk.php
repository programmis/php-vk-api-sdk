<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 28.11.16
 * Time: 20:12
 */

namespace VkApi;

/**
 * Class Vk
 * @package VkApi
 */
class Vk
{
    /**
     * @var string
     */
    private static $token = '';

    /**
     * @param $token
     */
    public static function setToken($token)
    {
        self::$token = $token;
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Account
     */
    public static function account($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Account($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Ads
     */
    public static function ads($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Ads($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Apps
     */
    public static function apps($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Apps($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Audio
     */
    public static function audio($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Audio($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Auth
     */
    public static function auth($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Auth($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Board
     */
    public static function board($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Board($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Database
     */
    public static function database($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Database($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Docs
     */
    public static function docs($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Docs($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Fave
     */
    public static function fave($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Fave($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Friends
     */
    public static function friends($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Friends($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Gifts
     */
    public static function gifts($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Gifts($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Groups
     */
    public static function groups($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Groups($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Leads
     */
    public static function leads($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Leads($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Likes
     */
    public static function likes($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Likes($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Market
     */
    public static function market($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Market($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Messages
     */
    public static function messages($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Messages($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Newsfeed
     */
    public static function newsfeed($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Newsfeed($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Notes
     */
    public static function notes($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Notes($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Notifications
     */
    public static function notifications($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Notifications($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Orders
     */
    public static function orders($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Orders($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Pages
     */
    public static function pages($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Pages($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Photos
     */
    public static function photos($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Photos($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Places
     */
    public static function places($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Places($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Polls
     */
    public static function polls($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Polls($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Search
     */
    public static function search($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Search($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Secure
     */
    public static function secure($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Secure($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Stats
     */
    public static function stats($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Stats($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Status
     */
    public static function status($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Status($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Storage
     */
    public static function storage($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Storage($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Users
     */
    public static function users($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Users($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Utils
     */
    public static function utils($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Utils($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Video
     */
    public static function video($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Video($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Wall
     */
    public static function wall($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Wall($token);
    }

    /**
     * @param string $token
     *
     * @return \VkApi\Methods\Widgets
     */
    public static function widgets($token = '')
    {
        if (!$token) {
            $token = self::$token;
        }

        return new \VkApi\Methods\Widgets($token);
    }
}
