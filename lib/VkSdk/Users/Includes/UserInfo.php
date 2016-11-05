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
 * @see     https://vk.com/dev/fields
 *
 * @package VkSdk\Users\Includes
 */
class UserInfo
{
    /** страница пользователя удалена */
    const DEACTIVATED_DELETED = 'deleted';
    /** страница пользователя заблокирована */
    const DEACTIVATED_BANNED = 'banned';

    /** не является другом */
    const FRIEND_STATUS_NOT = 0;
    /** отправлена заявка/подписка пользователю */
    const FRIEND_STATUS_SEND = 1;
    /** имеется входящая заявка/подписка от пользователя */
    const FRIEND_STATUS_RECEIVE = 2;
    /** является другом */
    const FRIEND_STATUS_YES = 3;

    /** не женат/не замужем; */
    const RELATION_NOT_MARRIED = 1;
    /** есть друг/есть подруга; */
    const RELATION_HAVE_FRIEND = 2;
    /** помолвлен/помолвлена; */
    const RELATION_ENGAGED = 3;
    /** женат/замужем; */
    const RELATION_MARRIED = 4;
    /** всё сложно; */
    const RELATION_COMPLICATED = 5;
    /** в активном поиске; */
    const RELATION_SEARCH = 6;
    /** влюблён/влюблена; */
    const RELATION_LOVE = 7;
    /** не указано. */
    const RELATION_NOT_INDICATED = 0;

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
    /** @var UserCropPhoto $crop_photo */
    private $crop_photo;
    /** @var string $domain */
    private $domain;
    /** @var UserEducation $education */
    private $education;
    /** @var array $exports */
    private $exports;
    /** @var string $first_name_nom */
    private $first_name_nom;
    /** @var string $first_name_gen */
    private $first_name_gen;
    /** @var string $first_name_dat */
    private $first_name_dat;
    /** @var string $first_name_acc */
    private $first_name_acc;
    /** @var string $first_name_ins */
    private $first_name_ins;
    /** @var string $first_name_abl */
    private $first_name_abl;
    /** @var int $followers_count */
    private $followers_count;
    /** @var int $friend_status */
    private $friend_status;
    /** @var string $games */
    private $games;
    /** @var bool $has_mobile */
    private $has_mobile;
    /** @var bool $has_photo */
    private $has_photo;
    /** @var string $home_town */
    private $home_town;
    /** @var string $interests */
    private $interests;
    /** @var bool $is_favorite */
    private $is_favorite;
    /** @var bool $is_friend */
    private $is_friend;
    /** @var bool $is_hidden_from_feed */
    private $is_hidden_from_feed;
    /** @var string $last_name_nom */
    private $last_name_nom;
    /** @var string $last_name_gen */
    private $last_name_gen;
    /** @var string $last_name_dat */
    private $last_name_dat;
    /** @var string $last_name_acc */
    private $last_name_acc;
    /** @var string $last_name_ins */
    private $last_name_ins;
    /** @var string $last_name_abl */
    private $last_name_abl;
    /** @var UserLastSeen $last_seen */
    private $last_seen;
    /** @var array $lists */
    private $lists;
    /** @var string $maiden_name */
    private $maiden_name;
    /** @var UserMilitary $military */
    private $military;
    /** @var string $movies */
    private $movies;
    /** @var string $music */
    private $music;
    /** @var string $nickname */
    private $nickname;
    /** @var UserOccupation $occupation */
    private $occupation;
    /** @var bool $online */
    private $online;
    /** @var UserPersonal $personal */
    private $personal;
    /** @var string $photo_50 */
    private $photo_50;
    /** @var string $photo_100 */
    private $photo_100;
    /** @var string $photo_200_orig */
    private $photo_200_orig;
    /** @var string $photo_200 */
    private $photo_200;
    /** @var string $photo_400_orig */
    private $photo_400_orig;
    /** @var string $photo_id */
    private $photo_id;
    /** @var string $photo_max */
    private $photo_max;
    /** @var string $photo_max_orig */
    private $photo_max_orig;
    /** @var string $quotes */
    private $quotes;
    /** @var UserRelative[] $relatives */
    private $relatives;
    /** @var int $relation */
    private $relation;
    /** @var UserRelationPartner $relation_partner */
    private $relation_partner;

    /**
     * партнер в семейном положении
     *
     * @return UserRelationPartner
     */
    public function getRelationPartner()
    {
        return $this->relation_partner;
    }

    /**
     * @param UserRelationPartner $relation_partner
     *
     * @return UserInfo
     */
    public function setRelationPartner($relation_partner)
    {
        $this->relation_partner = $relation_partner;

        return $this;
    }

    /**
     * семейное положение пользователя
     * см. RELATION_* константы
     * Если в семейном положении указан другой пользователь,
     * дополнительно возвращается объект relation_partner,
     * содержащий id и имя этого человека.
     *
     * @return int
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * @param int $relation
     *
     * @return UserInfo
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * список родственников текущего пользователя
     *
     * @return UserRelative[]
     */
    public function getRelatives()
    {
        return $this->relatives;
    }

    /**
     * @param UserRelative $relative
     *
     * @return UserInfo
     */
    public function addRelatives($relative)
    {
        $this->relatives[] = $relative;

        return $this;
    }

    /**
     * любимые цитаты.
     *
     * @return string
     */
    public function getQuotes()
    {
        return $this->quotes;
    }

    /**
     * @param string $quotes
     *
     * @return UserInfo
     */
    public function setQuotes($quotes)
    {
        $this->quotes = $quotes;

        return $this;
    }

    /**
     * url фотографии пользователя максимального размера.
     * Может быть возвращена фотография, имеющая ширину как 400,
     * так и 200 пикселей. В случае отсутствия у пользователя
     * фотографии возвращается http://vk.com/images/camera_a.gif.
     *
     * @return string
     */
    public function getPhotoMaxOrig()
    {
        return $this->photo_max_orig;
    }

    /**
     * @param string $photo_max_orig
     *
     * @return UserInfo
     */
    public function setPhotoMaxOrig($photo_max_orig)
    {
        $this->photo_max_orig = $photo_max_orig;

        return $this;
    }

    /**
     * url квадратной фотографии пользователя с максимальной шириной.
     * Может быть возвращена фотография, имеющая ширину как 200,
     * так и 100 пикселей. В случае отсутствия у пользователя
     * фотографии возвращается http://vk.com/images/camera_b.gif.
     *
     * @return string
     */
    public function getPhotoMax()
    {
        return $this->photo_max;
    }

    /**
     * @param string $photo_max
     *
     * @return UserInfo
     */
    public function setPhotoMax($photo_max)
    {
        $this->photo_max = $photo_max;

        return $this;
    }

    /**
     * строковый идентификатор главной фотографии профиля
     * пользователя в формате {user_id}_{photo_id}, например,
     * 6492_192164258. Обратите внимание, это поле может
     * отсутствовать в ответе.
     *
     * @return string
     */
    public function getPhotoId()
    {
        return $this->photo_id;
    }

    /**
     * @param string $photo_id
     *
     * @return UserInfo
     */
    public function setPhotoId($photo_id)
    {
        $this->photo_id = $photo_id;

        return $this;
    }

    /**
     * url фотографии пользователя, имеющей ширину 400 пикселей.
     * Если у пользователя отсутствует фотография такого размера,
     * в ответе вернется https://vk.com/images/camera_400.png.
     *
     * @return string
     */
    public function getPhoto400Orig()
    {
        return $this->photo_400_orig;
    }

    /**
     * @param string $photo_400_orig
     *
     * @return UserInfo
     */
    public function setPhoto400Orig($photo_400_orig)
    {
        $this->photo_400_orig = $photo_400_orig;

        return $this;
    }

    /**
     * url квадратной фотографии пользователя,
     * имеющей ширину 200 пикселей. Если у пользователя
     * отсутствует фотография таких размеров,
     * в ответе вернется https://vk.com/images/camera_200.png
     *
     * @return string
     */
    public function getPhoto200()
    {
        return $this->photo_200;
    }

    /**
     * @param string $photo_200
     *
     * @return UserInfo
     */
    public function setPhoto200($photo_200)
    {
        $this->photo_200 = $photo_200;

        return $this;
    }

    /**
     * url фотографии пользователя,
     * имеющей ширину 200 пикселей.
     * В случае отсутствия у пользователя фотографии
     * возвращается http://vk.com/images/camera_a.gif.
     *
     * @return string
     */
    public function getPhoto200Orig()
    {
        return $this->photo_200_orig;
    }

    /**
     * @param string $photo_200_orig
     *
     * @return UserInfo
     */
    public function setPhoto200Orig($photo_200_orig)
    {
        $this->photo_200_orig = $photo_200_orig;

        return $this;
    }

    /**
     * url квадратной фотографии пользователя,
     * имеющей ширину 100 пикселей. В случае отсутствия
     * у пользователя фотографии
     * возвращается http://vk.com/images/camera_b.gif.
     *
     * @return string
     */
    public function getPhoto100()
    {
        return $this->photo_100;
    }

    /**
     * @param string $photo_100
     *
     * @return UserInfo
     */
    public function setPhoto100($photo_100)
    {
        $this->photo_100 = $photo_100;

        return $this;
    }

    /**
     * url квадратной фотографии пользователя,
     * имеющей ширину 50 пикселей. В случае отсутствия
     * у пользователя фотографии
     * возвращается http://vk.com/images/camera_c.gif.
     *
     * @return string
     */
    public function getPhoto50()
    {
        return $this->photo_50;
    }

    /**
     * @param string $photo_50
     *
     * @return UserInfo
     */
    public function setPhoto50($photo_50)
    {
        $this->photo_50 = $photo_50;

        return $this;
    }

    /**
     * информация о полях из раздела «Жизненная позиция».
     *
     * @return UserPersonal
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    /**
     * @param UserPersonal $personal
     *
     * @return UserInfo
     */
    public function setPersonal($personal)
    {
        $this->personal = $personal;

        return $this;
    }

    /**
     * информация о том, находится ли пользователь сейчас на сайте.
     * Если пользователь использует мобильное приложение
     * либо мобильную версию сайта, возвращается
     * дополнительное поле online_mobile, содержащее 1.
     * При этом, если используется именно приложение,
     * дополнительно возвращается поле online_app,
     * содержащее его идентификатор.
     *
     * @return boolean
     */
    public function isOnline()
    {
        return $this->online;
    }

    /**
     * @param int $online
     *
     * @return UserInfo
     */
    public function setOnline($online)
    {
        $this->online = $online ? true : false;

        return $this;
    }

    /**
     * информация о текущем роде занятия пользователя
     *
     * @return UserOccupation
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * @param UserOccupation $occupation
     *
     * @return UserInfo
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * никнейм (отчество) пользователя.
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     *
     * @return UserInfo
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * содержимое поля «Любимая музыка» из профиля пользователя.
     *
     * @return string
     */
    public function getMusic()
    {
        return $this->music;
    }

    /**
     * @param string $music
     *
     * @return UserInfo
     */
    public function setMusic($music)
    {
        $this->music = $music;

        return $this;
    }

    /**
     * содержимое поля «Любимые фильмы» из профиля пользователя.
     *
     * @return string
     */
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * @param string $movies
     *
     * @return UserInfo
     */
    public function setMovies($movies)
    {
        $this->movies = $movies;

        return $this;
    }

    /**
     * информация о военной службе пользователя
     *
     * @return UserMilitary
     */
    public function getMilitary()
    {
        return $this->military;
    }

    /**
     * @param UserMilitary $military
     *
     * @return UserInfo
     */
    public function setMilitary($military)
    {
        $this->military = $military;

        return $this;
    }

    /**
     * девичья фамилия.
     *
     * @return string
     */
    public function getMaidenName()
    {
        return $this->maiden_name;
    }

    /**
     * @param string $maiden_name
     *
     * @return UserInfo
     */
    public function setMaidenName($maiden_name)
    {
        $this->maiden_name = $maiden_name;

        return $this;
    }

    /**
     * идентификаторы списков друзей,
     * в которых состоит пользователь.
     * Поле доступно только для метода friends.get.
     *
     * @return array
     */
    public function getLists()
    {
        return $this->lists;
    }

    /**
     * @param string $lists
     *
     * @return UserInfo
     */
    public function setLists($lists)
    {
        $this->lists = explode(',', $lists);

        return $this;
    }

    /**
     * время последнего посещения
     *
     * @return UserLastSeen
     */
    public function getLastSeen()
    {
        return $this->last_seen;
    }

    /**
     * @param UserLastSeen $last_seen
     *
     * @return UserInfo
     */
    public function setLastSeen($last_seen)
    {
        $this->last_seen = $last_seen;

        return $this;
    }

    /**
     * фамилия в именительном падеже
     *
     * @return string
     */
    public function getLastNameNom()
    {
        return $this->last_name_nom;
    }

    /**
     * @param string $last_name_nom
     *
     * @return UserInfo
     */
    public function setLastNameNom($last_name_nom)
    {
        $this->last_name_nom = $last_name_nom;

        return $this;
    }

    /**
     * фамилия в родительном падеже
     *
     * @return string
     */
    public function getLastNameGen()
    {
        return $this->last_name_gen;
    }

    /**
     * @param string $last_name_gen
     *
     * @return UserInfo
     */
    public function setLastNameGen($last_name_gen)
    {
        $this->last_name_gen = $last_name_gen;

        return $this;
    }

    /**
     * фамилия в дательном падеже
     *
     * @return string
     */
    public function getLastNameDat()
    {
        return $this->last_name_dat;
    }

    /**
     * @param string $last_name_dat
     *
     * @return UserInfo
     */
    public function setLastNameDat($last_name_dat)
    {
        $this->last_name_dat = $last_name_dat;

        return $this;
    }

    /**
     * фамилия в винительном падеже
     *
     * @return string
     */
    public function getLastNameAcc()
    {
        return $this->last_name_acc;
    }

    /**
     * @param string $last_name_acc
     *
     * @return UserInfo
     */
    public function setLastNameAcc($last_name_acc)
    {
        $this->last_name_acc = $last_name_acc;

        return $this;
    }

    /**
     * фамилия в творительном падеже
     *
     * @return string
     */
    public function getLastNameIns()
    {
        return $this->last_name_ins;
    }

    /**
     * @param string $last_name_ins
     *
     * @return UserInfo
     */
    public function setLastNameIns($last_name_ins)
    {
        $this->last_name_ins = $last_name_ins;

        return $this;
    }

    /**
     * фамилия в предложном падеже
     *
     * @return string
     */
    public function getLastNameAbl()
    {
        return $this->last_name_abl;
    }

    /**
     * @param string $last_name_abl
     *
     * @return UserInfo
     */
    public function setLastNameAbl($last_name_abl)
    {
        $this->last_name_abl = $last_name_abl;

        return $this;
    }

    /**
     * информация о том, скрыт ли пользователь из ленты
     * новостей текущего пользователя.
     *
     * @return boolean
     */
    public function isIsHiddenFromFeed()
    {
        return $this->is_hidden_from_feed;
    }

    /**
     * @param int $is_hidden_from_feed
     *
     * @return UserInfo
     */
    public function setIsHiddenFromFeed($is_hidden_from_feed)
    {
        $this->is_hidden_from_feed = $is_hidden_from_feed ? true : false;

        return $this;
    }

    /**
     * информация о том, является ли пользователь
     * другом текущего пользователя.
     *
     * @return boolean
     */
    public function isIsFriend(): bool
    {
        return $this->is_friend;
    }

    /**
     * @param int $is_friend
     *
     * @return UserInfo
     */
    public function setIsFriend($is_friend)
    {
        $this->is_friend = $is_friend ? true : false;

        return $this;
    }

    /**
     * информация о том, есть ли пользователь
     * в закладках у текущего пользователя.
     *
     * @return boolean
     */
    public function isIsFavorite()
    {
        return $this->is_favorite;
    }

    /**
     * @param int $is_favorite
     *
     * @return UserInfo
     */
    public function setIsFavorite($is_favorite)
    {
        $this->is_favorite = $is_favorite ? true : false;

        return $this;
    }

    /**
     * содержимое поля «Интересы» из профиля.
     *
     * @return string
     */
    public function getInterests()
    {
        return $this->interests;
    }

    /**
     * @param string $interests
     *
     * @return UserInfo
     */
    public function setInterests($interests)
    {
        $this->interests = $interests;

        return $this;
    }

    /**
     * название родного города пользователя.
     *
     * @return string
     */
    public function getHomeTown()
    {
        return $this->home_town;
    }

    /**
     * @param string $home_town
     *
     * @return UserInfo
     */
    public function setHomeTown($home_town)
    {
        $this->home_town = $home_town;

        return $this;
    }

    /**
     * если текущий пользователь
     * установил фотографию для профиля.
     *
     * @return boolean
     */
    public function isHasPhoto()
    {
        return $this->has_photo;
    }

    /**
     * @param int $has_photo
     *
     * @return UserInfo
     */
    public function setHasPhoto($has_photo)
    {
        $this->has_photo = $has_photo ? true : false;

        return $this;
    }

    /**
     * информация о том, известен ли номер мобильного
     * телефона пользователя.
     *
     * @return boolean
     */
    public function isHasMobile()
    {
        return $this->has_mobile;
    }

    /**
     * @param int $has_mobile
     *
     * @return UserInfo
     */
    public function setHasMobile($has_mobile)
    {
        $this->has_mobile = $has_mobile ? true : false;

        return $this;
    }

    /**
     * содержимое поля «Любимые игры» из профиля пользователя.
     *
     * @return string
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * @param string $games
     *
     * @return UserInfo
     */
    public function setGames($games)
    {
        $this->games = $games;

        return $this;
    }

    /**
     * статус дружбы с пользователем.
     * см. FRIEND_STATUS_* константы
     *
     * @return int
     */
    public function getFriendStatus()
    {
        return $this->friend_status;
    }

    /**
     * @param int $friend_status
     *
     * @return UserInfo
     */
    public function setFriendStatus($friend_status)
    {
        $this->friend_status = $friend_status;

        return $this;
    }

    /**
     * количество подписчиков пользователя.
     *
     * @return int
     */
    public function getFollowersCount()
    {
        return $this->followers_count;
    }

    /**
     * @param int $followers_count
     *
     * @return UserInfo
     */
    public function setFollowersCount($followers_count)
    {
        $this->followers_count = $followers_count;

        return $this;
    }

    /**
     * имя в именительном падеже.
     *
     * @return string
     */
    public function getFirstNameNom()
    {
        return $this->first_name_nom;
    }

    /**
     * @param string $first_name_nom
     *
     * @return UserInfo
     */
    public function setFirstNameNom($first_name_nom)
    {
        $this->first_name_nom = $first_name_nom;

        return $this;
    }

    /**
     * имя в родительном падеже.
     *
     * @return string
     */
    public function getFirstNameGen()
    {
        return $this->first_name_gen;
    }

    /**
     * @param string $first_name_gen
     *
     * @return UserInfo
     */
    public function setFirstNameGen($first_name_gen)
    {
        $this->first_name_gen = $first_name_gen;

        return $this;
    }

    /**
     * имя в дательном падеже.
     *
     * @return string
     */
    public function getFirstNameDat()
    {
        return $this->first_name_dat;
    }

    /**
     * @param string $first_name_dat
     *
     * @return UserInfo
     */
    public function setFirstNameDat($first_name_dat)
    {
        $this->first_name_dat = $first_name_dat;

        return $this;
    }

    /**
     * имя в винительном падеже.
     *
     * @return string
     */
    public function getFirstNameAcc()
    {
        return $this->first_name_acc;
    }

    /**
     * @param string $first_name_acc
     *
     * @return UserInfo
     */
    public function setFirstNameAcc($first_name_acc)
    {
        $this->first_name_acc = $first_name_acc;

        return $this;
    }

    /**
     * имя в творительном падеже.
     *
     * @return string
     */
    public function getFirstNameIns()
    {
        return $this->first_name_ins;
    }

    /**
     * @param string $first_name_ins
     *
     * @return UserInfo
     */
    public function setFirstNameIns($first_name_ins)
    {
        $this->first_name_ins = $first_name_ins;

        return $this;
    }

    /**
     * имя в предложном падеже.
     *
     * @return string
     */
    public function getFirstNameAbl()
    {
        return $this->first_name_abl;
    }

    /**
     * @param string $first_name_abl
     *
     * @return UserInfo
     */
    public function setFirstNameAbl($first_name_abl)
    {
        $this->first_name_abl = $first_name_abl;

        return $this;
    }

    /**
     * внешние сервисы, в которые настроен экспорт
     * из ВК (twitter, facebook, livejournal, instagram).
     *
     * @return array
     */
    public function getExports()
    {
        return $this->exports;
    }

    /**
     * @param array $exports
     *
     * @return UserInfo
     */
    public function setExports($exports)
    {
        $this->exports = explode(',', $exports);

        return $this;
    }

    /**
     * информация о высшем учебном заведении пользователя.
     *
     * @return UserEducation
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @param UserEducation $education
     *
     * @return UserInfo
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * короткий адрес страницы.
     * Возвращается строка, содержащая короткий адрес страницы
     * (например, andrew). Если он не назначен,
     * возвращается "id"+user_id, например, id35828305.
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     *
     * @return UserInfo
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * возвращает данные о точках,
     * по которым вырезаны профильная
     * и миниатюрная фотографии пользователя.
     *
     * @return UserCropPhoto
     */
    public function getCropPhoto()
    {
        return $this->crop_photo;
    }

    /**
     * @param UserCropPhoto $crop_photo
     *
     * @return UserInfo
     */
    public function setCropPhoto($crop_photo)
    {
        $this->crop_photo = $crop_photo;

        return $this;
    }

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
     *
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
     *
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
     *
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
}
