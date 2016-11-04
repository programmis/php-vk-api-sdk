<?php

namespace VkSdk\Users\Includes;

use VkSdk\Database\Includes\City;
use VkSdk\Database\Includes\Country;

/**
 * Объект содержит информацию о пользователе ВКонтакте.
 * Набор полей может меняться в зависимости от вызванного метода
 * и переданных в нем параметров.
 *
 * Class UserInfo
 *
 * @see https://vk.com/dev/fields
 *
 * @package VkSdk\Users\Includes
 */
class UserInfo
{
    const DEACTIVATED_DELETED = 'deleted';
    const DEACTIVATED_BANNED = 'banned';

    /** @var int $id */
    private $id;
    /** @var string $first_name */
    private $first_name = "";
    /** @var string $last_name */
    private $last_name = "";
    /** @var string $deactivated */
    private $deactivated;
    /** @var bool $hidden */
    private $hidden = false;
    /** @var string $about */
    private $about;
    /** @var string $activities */
    private $activities;
    /** @var string $bdate */
    private $bdate;
    /** @var bool $blacklisted */
    private $blacklisted;
    /** @var bool $blacklisted_by_me */
    private $blacklisted_by_me;
    /** @var string $books */
    private $books;
    /** @var bool $can_post */
    private $can_post;
    /** @var bool $can_see_all_posts */
    private $can_see_all_posts;
    /** @var bool $can_see_audio */
    private $can_see_audio;
    /** @var bool $can_send_friend_request */
    private $can_send_friend_request;
    /** @var bool $can_write_private_message */
    private $can_write_private_message;
    /** @var UserCareer $career */
    private $career;
    /** @var City $city */
    private $city;
    /** @var int $common_count */
    private $common_count;
    /** @var mixed $connections */
    private $connections;
    /** @var UserContacts $contacts */
    private $contacts;
    /** @var UserCounters $counters */
    private $counters;
    /** @var Country $country */
    private $country;

    private $sex = 0;
    private $photo_50;
    private $last_seen = [];

    /**
     * информация о стране, указанной на странице
     * пользователя в разделе «Контакты».
     *
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     *
     * @return UserInfo
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * количество различных объектов у пользователя.
     * Поле возвращается только в методе users.get
     * при запросе информации об одном пользователе,
     * с передачей access_token.
     *
     * @return UserCounters
     */
    public function getCounters()
    {
        return $this->counters;
    }

    /**
     * @param UserCounters $counters
     *
     * @return UserInfo
     */
    public function setCounters($counters)
    {
        $this->counters = $counters;

        return $this;
    }

    /**
     * информация о телефонных номерах пользователя.
     *
     * @return UserContacts
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param UserContacts $contacts
     *
     * @return UserInfo
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * возвращает данные об указанных в профиле сервисах пользователя,
     * таких как: skype, facebook, twitter, livejournal, instagram.
     *
     * @return mixed
     */
    public function getConnections()
    {
        return $this->connections;
    }

    /**
     * @param mixed $connections
     *
     * @return UserInfo
     */
    public function setConnections($connections)
    {
        $this->connections = $connections;

        return $this;
    }

    /**
     * количество общих друзей с текущим пользователем.
     *
     * @return int
     */
    public function getCommonCount()
    {
        return $this->common_count;
    }

    /**
     * @param int $common_count
     *
     * @return UserInfo
     */
    public function setCommonCount($common_count)
    {
        $this->common_count = $common_count;

        return $this;
    }

    /**
     * информация о городе, указанном на странице пользователя
     * в разделе «Контакты».
     *
     * @return City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param City $city
     *
     * @return UserInfo
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * информация о карьере пользователя.
     *
     * @return UserCareer
     */
    public function getCareer()
    {
        return $this->career;
    }

    /**
     * @param UserCareer $career
     *
     * @return UserInfo
     */
    public function setCareer($career)
    {
        $this->career = $career;

        return $this;
    }

    /**
     * информация о том, может ли текущий пользователь
     * отправить личное сообщение.
     *
     * @return boolean
     */
    public function isCanWritePrivateMessage()
    {
        return $this->can_write_private_message;
    }

    /**
     * @param int $can_write_private_message
     *
     * @return UserInfo
     */
    public function setCanWritePrivateMessage($can_write_private_message)
    {
        $this->can_write_private_message = $can_write_private_message ? true : false;

        return $this;
    }

    /**
     * информация о том, будет ли отправлено уведомление
     * пользователю о заявке в друзья от текущего пользователя.
     *
     * @return boolean
     */
    public function isCanSendFriendRequest()
    {
        return $this->can_send_friend_request;
    }

    /**
     * @param int $can_send_friend_request
     *
     * @return UserInfo
     */
    public function setCanSendFriendRequest($can_send_friend_request)
    {
        $this->can_send_friend_request = $can_send_friend_request ? true : false;

        return $this;
    }

    /**
     * информация о том, может ли
     * текущий пользователь видеть аудиозаписи.
     *
     * @return boolean
     */
    public function isCanSeeAudio()
    {
        return $this->can_see_audio;
    }

    /**
     * @param int $can_see_audio
     *
     * @return UserInfo
     */
    public function setCanSeeAudio($can_see_audio)
    {
        $this->can_see_audio = $can_see_audio ? true : false;

        return $this;
    }

    /**
     * информация о том, может ли текущий пользователь
     * видеть чужие записи на стене.
     *
     * @return boolean
     */
    public function isCanSeeAllPosts()
    {
        return $this->can_see_all_posts;
    }

    /**
     * @param int $can_see_all_posts
     *
     * @return UserInfo
     */
    public function setCanSeeAllPosts($can_see_all_posts)
    {
        $this->can_see_all_posts = $can_see_all_posts ? true : false;

        return $this;
    }

    /**
     * информация о том, может ли текущий пользователь
     * оставлять записи на стене.
     *
     * @return boolean
     */
    public function isCanPost()
    {
        return $this->can_post;
    }

    /**
     * @param int $can_post
     *
     * @return UserInfo
     */
    public function setCanPost($can_post)
    {
        $this->can_post = $can_post ? true : false;

        return $this;
    }

    /**
     * содержимое поля «Любимые книги» из профиля пользователя.
     *
     * @return string
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * @param string $books
     *
     * @return UserInfo
     */
    public function setBooks($books)
    {
        $this->books = $books;

        return $this;
    }

    /**
     * информация о том, находится ли пользователь
     * в черном списке у текущего пользователя.
     *
     * @return boolean
     */
    public function isBlacklistedByMe()
    {
        return $this->blacklisted_by_me;
    }

    /**
     * @param int $blacklisted_by_me
     *
     * @return UserInfo
     */
    public function setBlacklistedByMe($blacklisted_by_me)
    {
        $this->blacklisted_by_me = $blacklisted_by_me ? true : false;

        return $this;
    }

    /**
     * информация о том, находится ли текущий пользователь
     * в черном списке.
     *
     * @return boolean
     */
    public function isBlacklisted()
    {
        return $this->blacklisted;
    }

    /**
     * @param int $blacklisted
     *
     * @return UserInfo
     */
    public function setBlacklisted($blacklisted)
    {
        $this->blacklisted = $blacklisted ? true : false;

        return $this;
    }

    /**
     * дата рождения. Возвращается в формате DD.MM.YYYY или DD.MM
     * (если год рождения скрыт).
     * Если дата рождения скрыта целиком, поле отсутствует в ответе.
     *
     * @return string
     */
    public function getBdate()
    {
        return $this->bdate;
    }

    /**
     * @param string $bdate
     *
     * @return UserInfo
     */
    public function setBdate($bdate)
    {
        $this->bdate = $bdate;

        return $this;
    }

    /**
     * содержимое поля «Деятельность» из профиля пользователя.
     *
     * @return string
     */
    public function getActivities(): string
    {
        return $this->activities;
    }

    /**
     * @param string $activities
     * @return UserInfo
     */
    public function setActivities($activities)
    {
        $this->activities = $activities;

        return $this;
    }

    /**
     * содержимое поля «О себе» из профиля пользователя.
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @param string $about
     * @return UserInfo
     */
    public function setAbout($about)
    {
        $this->about = $about;
        return $this;
    }

    /**
     * возвращается true при вызове без access_token,
     * если пользователь установил настройку
     * «Кому в интернете видна моя страница» — «Только пользователям ВКонтакте».
     * В этом случае дополнительные поля fields не возвращаются.
     *
     * @return boolean
     */
    public function isHidden()
    {
        return $this->hidden;
    }

    /**
     * @param boolean $hidden
     * @return UserInfo
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * поле возвращается, если страница пользователя удалена или
     * заблокирована, содержит значение констант DEACTIVATED_*.
     * В этом случае дополнительные поля fields не возвращаются.
     *
     * @return string
     */
    public function getDeactivated()
    {
        return $this->deactivated;
    }

    /**
     * @param string $deactivated
     *
     * @return UserInfo
     */
    public function setDeactivated($deactivated)
    {
        $this->deactivated = $deactivated;

        return $this;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * идентификатор пользователя.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setLastSeen($time, $platform)
    {
        $this->last_seen['time'] = $time;
        $this->last_seen['platform'] = $platform;
        return $this;
    }

    public function getLastSeen()
    {
        return $this->last_seen;
    }

    /**
     * @param string $first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * имя.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * фамилия.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    public function setPhoto50($photo_50)
    {
        $this->photo_50 = $photo_50;
        return $this;
    }

    public function getPhoto50()
    {
        return $this->photo_50;
    }


    public function getSex()
    {
        return $this->sex;
    }
}
