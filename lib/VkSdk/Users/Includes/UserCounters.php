<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 04.11.16
 * Time: 0:04
 */

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;

/**
 * количество различных объектов у пользователя.
 *
 * Class UserCounters
 * @package VkSdk\Users\Includes
 */
class UserCounters
{
    use AutoFillObject;

    /** @var int $albums */
    private $albums;
    /** @var int $videos */
    private $videos;
    /** @var int $audios */
    private $audios;
    /** @var int $photos */
    private $photos;
    /** @var int $notes */
    private $notes;
    /** @var int $friends */
    private $friends;
    /** @var int $groups */
    private $groups;
    /** @var int $online_friends */
    private $online_friends;
    /** @var int $mutual_friends */
    private $mutual_friends;
    /** @var int $user_videos */
    private $user_videos;
    /** @var int $followers */
    private $followers;
    /** @var int $pages */
    private $pages;

    /**
     * количество фотоальбомов;
     *
     * @return int
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * @param int $albums
     *
     * @return UserCounters
     */
    public function setAlbums($albums)
    {
        $this->albums = $albums;

        return $this;
    }

    /**
     * количество видеозаписей;
     *
     * @return int
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * @param int $videos
     *
     * @return UserCounters
     */
    public function setVideos($videos)
    {
        $this->videos = $videos;

        return $this;
    }

    /**
     * количество аудиозаписей;
     *
     * @return int
     */
    public function getAudios()
    {
        return $this->audios;
    }

    /**
     * @param int $audios
     *
     * @return UserCounters
     */
    public function setAudios($audios)
    {
        $this->audios = $audios;

        return $this;
    }

    /**
     * количество фотографий;
     *
     * @return int
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param int $photos
     *
     * @return UserCounters
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * количество заметок;
     *
     * @return int
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param int $notes
     *
     * @return UserCounters
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * количество друзей;
     *
     * @return int
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * @param int $friends
     *
     * @return UserCounters
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * количество сообществ;
     *
     * @return int
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param int $groups
     *
     * @return UserCounters
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * количество друзей онлайн;
     *
     * @return int
     */
    public function getOnlineFriends()
    {
        return $this->online_friends;
    }

    /**
     * @param int $online_friends
     *
     * @return UserCounters
     */
    public function setOnlineFriends($online_friends)
    {
        $this->online_friends = $online_friends;

        return $this;
    }

    /**
     * количество общих друзей;
     *
     * @return int
     */
    public function getMutualFriends()
    {
        return $this->mutual_friends;
    }

    /**
     * @param int $mutual_friends
     *
     * @return UserCounters
     */
    public function setMutualFriends($mutual_friends)
    {
        $this->mutual_friends = $mutual_friends;

        return $this;
    }

    /**
     * количество видеозаписей с пользователем;
     *
     * @return int
     */
    public function getUserVideos()
    {
        return $this->user_videos;
    }

    /**
     * @param int $user_videos
     *
     * @return UserCounters
     */
    public function setUserVideos($user_videos)
    {
        $this->user_videos = $user_videos;

        return $this;
    }

    /**
     * количество подписчиков;
     *
     * @return int
     */
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * @param int $followers
     *
     * @return UserCounters
     */
    public function setFollowers($followers)
    {
        $this->followers = $followers;

        return $this;
    }

    /**
     * количество объектов в блоке «Интересные страницы».
     *
     * @return int
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param int $pages
     *
     * @return UserCounters
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }
}
