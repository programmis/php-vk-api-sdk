<?php

namespace VkSdk\Groups\Includes;

use lib\AutoFillObject;
use VkSdk\Audio\Includes\Full;
use VkSdk\Base\Country;
use VkSdk\Base\Objects;
use VkSdk\Users\Includes\Career;
use VkSdk\Users\Includes\CropPhoto;
use VkSdk\Users\Includes\LastSeen;
use VkSdk\Users\Includes\Military;
use VkSdk\Users\Includes\Occupation;
use VkSdk\Users\Includes\Personal;
use VkSdk\Users\Includes\Relative;
use VkSdk\Users\Includes\School;
use VkSdk\Users\Includes\University;
use VkSdk\Users\Includes\UserMin;

/**
 * Class UserXtrRole
 * @package VkSdk\Groups\Includes
 */
class UserXtrRole
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $about;

    /**
     * @var string
     */
    private $activities;

    /**
     * @var string
     */
    private $activity;

    /**
     * @var string
     */
    private $bdate;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $blacklisted;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $blacklisted_by_me;

    /**
     * @var string
     */
    private $books;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_post;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_see_all_posts;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_see_audio;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_send_friend_request;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_write_private_message;

    /**
     * @var Career[]
     */
    private $career;

    /**
     * @var Objects
     */
    private $city;

    /**
     * @var integer
     */
    private $common_count;

    /**
     * @var Country
     */
    private $country;

    /**
     * @var CropPhoto
     */
    private $crop_photo;

    /**
     * @var string
     */
    private $deactivated;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $education_form;

    /**
     * @var string
     */
    private $education_status;

    /**
     * @var object
     */
    private $exports;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $facebook_name;

    /**
     * @var integer
     */
    private $faculty;

    /**
     * @var string
     */
    private $faculty_name;

    /**
     * @var string
     */
    private $first_name;

    /**
     * @var integer
     */
    private $followers_count;

    /**
     * @var integer
     */
    private $friend_status;

    /**
     * @var string
     */
    private $games;

    /**
     * @var integer
     */
    private $graduation;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $has_mobile;

    /**
     * @var integer
     */
    private $has_photo;

    /**
     * @var integer
     */
    private $hidden;

    /**
     * @var string
     */
    private $home_phone;

    /**
     * @var string
     */
    private $home_town;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $instagram;

    /**
     * @var string
     */
    private $interests;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $is_favorite;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $is_friend;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $is_hidden_from_feed;

    /**
     * @var string
     */
    private $last_name;

    /**
     * @var LastSeen
     */
    private $last_seen;

    /**
     * @var string
     */
    private $livejournal;

    /**
     * @var string
     */
    private $maiden_name;

    /**
     * @var Military[]
     */
    private $military;

    /**
     * @var string
     */
    private $mobile_phone;

    /**
     * @var string
     */
    private $movies;

    /**
     * @var string
     */
    private $music;

    /**
     * @var string
     */
    private $nickname;

    /**
     * @var Occupation
     */
    private $occupation;

    /**
     * @var integer
     */
    private $online;

    /**
     * @var Personal
     */
    private $personal;

    /**
     * @var string
     */
    private $photo_100;

    /**
     * @var string
     */
    private $photo_200;

    /**
     * @var string
     */
    private $photo_200_orig;

    /**
     * @var string
     */
    private $photo_400_orig;

    /**
     * @var string
     */
    private $photo_50;

    /**
     * @var string
     */
    private $photo_id;

    /**
     * @var string
     */
    private $photo_max;

    /**
     * @var string
     */
    private $photo_max_orig;

    /**
     * @var string
     */
    private $quotes;

    /**
     * @var integer
     */
    private $relation;

    /**
     * @var UserMin
     */
    private $relation_partner;

    /**
     * @var Relative[]
     */
    private $relatives;

    /**
     * See constants of class RoleOptions
     *
     * @var string
     */
    private $role;

    /**
     * @var School[]
     */
    private $schools;

    /**
     * @var string
     */
    private $screen_name;

    /**
     * @var integer
     */
    private $sex;

    /**
     * @var string
     */
    private $site;

    /**
     * @var string
     */
    private $skype;

    /**
     * @var string
     */
    private $status;

    /**
     * @var Full
     */
    private $status_audio;

    /**
     * @var integer
     */
    private $timezone;

    /**
     * @var string
     */
    private $tv;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var University[]
     */
    private $universities;

    /**
     * @var integer
     */
    private $university;

    /**
     * @var string
     */
    private $university_name;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $verified;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $wall_comments;

    /**
     * @return $this
     *
     * @param Career $career
     */
    public function addCareer(Career $career)
    {
        $this->career[] = $career;

        return $this;
    }

    /**
     * @return $this
     *
     * @param Military $military
     */
    public function addMilitary(Military $military)
    {
        $this->military[] = $military;

        return $this;
    }

    /**
     * @return $this
     *
     * @param Relative $relative
     */
    public function addRelative(Relative $relative)
    {
        $this->relatives[] = $relative;

        return $this;
    }

    /**
     * @return $this
     *
     * @param School $school
     */
    public function addSchool(School $school)
    {
        $this->schools[] = $school;

        return $this;
    }

    /**
     * @return $this
     *
     * @param University $universitie
     */
    public function addUniversitie(University $universitie)
    {
        $this->universities[] = $universitie;

        return $this;
    }

    /**
     * About me field
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * @return $this
     *
     * @param string $about
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * User's activities
     *
     * @return string
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * @return $this
     *
     * @param string $activities
     */
    public function setActivities($activities)
    {
        $this->activities = $activities;

        return $this;
    }

    /**
     * User's status
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @return $this
     *
     * @param string $activity
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * User's date of birth
     *
     * @return string
     */
    public function getBdate()
    {
        return $this->bdate;
    }

    /**
     * @return $this
     *
     * @param string $bdate
     */
    public function setBdate($bdate)
    {
        $this->bdate = $bdate;

        return $this;
    }

    /**
     * Information whether current user is in the requested user's blacklist.
     *
     * @return integer
     */
    public function getBlacklisted()
    {
        return $this->blacklisted;
    }

    /**
     * @return $this
     *
     * @param integer $blacklisted
     */
    public function setBlacklisted($blacklisted)
    {
        $this->blacklisted = $blacklisted;

        return $this;
    }

    /**
     * Information whether the requested user is in current user's blacklist
     *
     * @return integer
     */
    public function getBlacklistedByMe()
    {
        return $this->blacklisted_by_me;
    }

    /**
     * @return $this
     *
     * @param integer $blacklisted_by_me
     */
    public function setBlacklistedByMe($blacklisted_by_me)
    {
        $this->blacklisted_by_me = $blacklisted_by_me;

        return $this;
    }

    /**
     * User's favorite books
     *
     * @return string
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * @return $this
     *
     * @param string $books
     */
    public function setBooks($books)
    {
        $this->books = $books;

        return $this;
    }

    /**
     * Information whether current user can post on the user's wall
     *
     * @return integer
     */
    public function getCanPost()
    {
        return $this->can_post;
    }

    /**
     * @return $this
     *
     * @param integer $can_post
     */
    public function setCanPost($can_post)
    {
        $this->can_post = $can_post;

        return $this;
    }

    /**
     * Information whether current user can see other users' audio on the wall
     *
     * @return integer
     */
    public function getCanSeeAllPosts()
    {
        return $this->can_see_all_posts;
    }

    /**
     * @return $this
     *
     * @param integer $can_see_all_posts
     */
    public function setCanSeeAllPosts($can_see_all_posts)
    {
        $this->can_see_all_posts = $can_see_all_posts;

        return $this;
    }

    /**
     * Information whether current user can see the user's audio
     *
     * @return integer
     */
    public function getCanSeeAudio()
    {
        return $this->can_see_audio;
    }

    /**
     * @return $this
     *
     * @param integer $can_see_audio
     */
    public function setCanSeeAudio($can_see_audio)
    {
        $this->can_see_audio = $can_see_audio;

        return $this;
    }

    /**
     * Information whether current user can send a friend request
     *
     * @return integer
     */
    public function getCanSendFriendRequest()
    {
        return $this->can_send_friend_request;
    }

    /**
     * @return $this
     *
     * @param integer $can_send_friend_request
     */
    public function setCanSendFriendRequest($can_send_friend_request)
    {
        $this->can_send_friend_request = $can_send_friend_request;

        return $this;
    }

    /**
     * Information whether current user can write private message
     *
     * @return integer
     */
    public function getCanWritePrivateMessage()
    {
        return $this->can_write_private_message;
    }

    /**
     * @return $this
     *
     * @param integer $can_write_private_message
     */
    public function setCanWritePrivateMessage($can_write_private_message)
    {
        $this->can_write_private_message = $can_write_private_message;

        return $this;
    }

    /**
     * @return Career[]
     */
    public function getCareer()
    {
        return $this->career;
    }

    /**
     * @return $this
     *
     * @param array $career
     */
    public function setCareer(array $career)
    {
        $this->career = $career;

        return $this;
    }

    /**
     * @return Objects
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return $this
     *
     * @param Objects $city
     */
    public function setCity(Objects $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Number of common friends with current user
     *
     * @return integer
     */
    public function getCommonCount()
    {
        return $this->common_count;
    }

    /**
     * @return $this
     *
     * @param integer $common_count
     */
    public function setCommonCount($common_count)
    {
        $this->common_count = $common_count;

        return $this;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return $this
     *
     * @param Country $country
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return CropPhoto
     */
    public function getCropPhoto()
    {
        return $this->crop_photo;
    }

    /**
     * @return $this
     *
     * @param CropPhoto $crop_photo
     */
    public function setCropPhoto(CropPhoto $crop_photo)
    {
        $this->crop_photo = $crop_photo;

        return $this;
    }

    /**
     * Returns if a profile is deleted or blocked
     *
     * @return string
     */
    public function getDeactivated()
    {
        return $this->deactivated;
    }

    /**
     * @return $this
     *
     * @param string $deactivated
     */
    public function setDeactivated($deactivated)
    {
        $this->deactivated = $deactivated;

        return $this;
    }

    /**
     * Domain name of the user's page
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @return $this
     *
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Education form
     *
     * @return string
     */
    public function getEducationForm()
    {
        return $this->education_form;
    }

    /**
     * @return $this
     *
     * @param string $education_form
     */
    public function setEducationForm($education_form)
    {
        $this->education_form = $education_form;

        return $this;
    }

    /**
     * User's education status
     *
     * @return string
     */
    public function getEducationStatus()
    {
        return $this->education_status;
    }

    /**
     * @return $this
     *
     * @param string $education_status
     */
    public function setEducationStatus($education_status)
    {
        $this->education_status = $education_status;

        return $this;
    }

    /**
     * @return object
     */
    public function getExports()
    {
        return $this->exports;
    }

    /**
     * @return $this
     *
     * @param object $exports
     */
    public function setExports($exports)
    {
        $this->exports = $exports;

        return $this;
    }

    /**
     * User's Facebook account
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @return $this
     *
     * @param string $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * User's Facebook name
     * @return string
     */
    public function getFacebookName()
    {
        return $this->facebook_name;
    }

    /**
     * @return $this
     *
     * @param string $facebook_name
     */
    public function setFacebookName($facebook_name)
    {
        $this->facebook_name = $facebook_name;

        return $this;
    }

    /**
     * Faculty ID
     * @return integer
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * @return $this
     *
     * @param integer $faculty
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;

        return $this;
    }

    /**
     * Faculty name
     * @return string
     */
    public function getFacultyName()
    {
        return $this->faculty_name;
    }

    /**
     * @return $this
     *
     * @param string $faculty_name
     */
    public function setFacultyName($faculty_name)
    {
        $this->faculty_name = $faculty_name;

        return $this;
    }

    /**
     * User first name
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return $this
     *
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Number of user's followers
     * @return integer
     */
    public function getFollowersCount()
    {
        return $this->followers_count;
    }

    /**
     * @return $this
     *
     * @param integer $followers_count
     */
    public function setFollowersCount($followers_count)
    {
        $this->followers_count = $followers_count;

        return $this;
    }

    /**
     * Friend status for current user
     * @return integer
     */
    public function getFriendStatus()
    {
        return $this->friend_status;
    }

    /**
     * @return $this
     *
     * @param integer $friend_status
     */
    public function setFriendStatus($friend_status)
    {
        $this->friend_status = $friend_status;

        return $this;
    }

    /**
     * User's favorite games
     * @return string
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * @return $this
     *
     * @param string $games
     */
    public function setGames($games)
    {
        $this->games = $games;

        return $this;
    }

    /**
     * Graduation year
     * @return integer
     */
    public function getGraduation()
    {
        return $this->graduation;
    }

    /**
     * @return $this
     *
     * @param integer $graduation
     */
    public function setGraduation($graduation)
    {
        $this->graduation = $graduation;

        return $this;
    }

    /**
     * Information whether the user specified his phone number
     * @return integer
     */
    public function getHasMobile()
    {
        return $this->has_mobile;
    }

    /**
     * @return $this
     *
     * @param integer $has_mobile
     */
    public function setHasMobile($has_mobile)
    {
        $this->has_mobile = $has_mobile;

        return $this;
    }

    /**
     * Information whether the user has main photo
     * @return integer
     */
    public function getHasPhoto()
    {
        return $this->has_photo;
    }

    /**
     * @return $this
     *
     * @param integer $has_photo
     */
    public function setHasPhoto($has_photo)
    {
        $this->has_photo = $has_photo;

        return $this;
    }

    /**
     * Returns if a profile is hidden.
     * @return integer
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * @return $this
     *
     * @param integer $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * User's mobile phone number
     * @return string
     */
    public function getHomePhone()
    {
        return $this->home_phone;
    }

    /**
     * @return $this
     *
     * @param string $home_phone
     */
    public function setHomePhone($home_phone)
    {
        $this->home_phone = $home_phone;

        return $this;
    }

    /**
     * User hometown
     * @return string
     */
    public function getHomeTown()
    {
        return $this->home_town;
    }

    /**
     * @return $this
     *
     * @param string $home_town
     */
    public function setHomeTown($home_town)
    {
        $this->home_town = $home_town;

        return $this;
    }

    /**
     * User ID
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * User's Instagram account
     * @return string
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * @return $this
     *
     * @param string $instagram
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * User's interests
     * @return string
     */
    public function getInterests()
    {
        return $this->interests;
    }

    /**
     * @return $this
     *
     * @param string $interests
     */
    public function setInterests($interests)
    {
        $this->interests = $interests;

        return $this;
    }

    /**
     * Information whether the requested user is in faves of current user
     * @return integer
     */
    public function getIsFavorite()
    {
        return $this->is_favorite;
    }

    /**
     * @return $this
     *
     * @param integer $is_favorite
     */
    public function setIsFavorite($is_favorite)
    {
        $this->is_favorite = $is_favorite;

        return $this;
    }

    /**
     * Information whether the user is a friend of current user
     * @return integer
     */
    public function getIsFriend()
    {
        return $this->is_friend;
    }

    /**
     * @return $this
     *
     * @param integer $is_friend
     */
    public function setIsFriend($is_friend)
    {
        $this->is_friend = $is_friend;

        return $this;
    }

    /**
     * Information whether the requested user is hidden from current user's newsfeed
     * @return integer
     */
    public function getIsHiddenFromFeed()
    {
        return $this->is_hidden_from_feed;
    }

    /**
     * @return $this
     *
     * @param integer $is_hidden_from_feed
     */
    public function setIsHiddenFromFeed($is_hidden_from_feed)
    {
        $this->is_hidden_from_feed = $is_hidden_from_feed;

        return $this;
    }

    /**
     * User last name
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return $this
     *
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * @return LastSeen
     */
    public function getLastSeen()
    {
        return $this->last_seen;
    }

    /**
     * @return $this
     *
     * @param LastSeen $last_seen
     */
    public function setLastSeen(LastSeen $last_seen)
    {
        $this->last_seen = $last_seen;

        return $this;
    }

    /**
     * User's Livejournal account
     * @return string
     */
    public function getLivejournal()
    {
        return $this->livejournal;
    }

    /**
     * @return $this
     *
     * @param string $livejournal
     */
    public function setLivejournal($livejournal)
    {
        $this->livejournal = $livejournal;

        return $this;
    }

    /**
     * User maiden name
     * @return string
     */
    public function getMaidenName()
    {
        return $this->maiden_name;
    }

    /**
     * @return $this
     *
     * @param string $maiden_name
     */
    public function setMaidenName($maiden_name)
    {
        $this->maiden_name = $maiden_name;

        return $this;
    }

    /**
     * @return Military[]
     */
    public function getMilitary()
    {
        return $this->military;
    }

    /**
     * @return $this
     *
     * @param array $military
     */
    public function setMilitary(array $military)
    {
        $this->military = $military;

        return $this;
    }

    /**
     * Information whether current user can see
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobile_phone;
    }

    /**
     * @return $this
     *
     * @param string $mobile_phone
     */
    public function setMobilePhone($mobile_phone)
    {
        $this->mobile_phone = $mobile_phone;

        return $this;
    }

    /**
     * User's favorite movies
     * @return string
     */
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * @return $this
     *
     * @param string $movies
     */
    public function setMovies($movies)
    {
        $this->movies = $movies;

        return $this;
    }

    /**
     * User's favorite music
     * @return string
     */
    public function getMusic()
    {
        return $this->music;
    }

    /**
     * @return $this
     *
     * @param string $music
     */
    public function setMusic($music)
    {
        $this->music = $music;

        return $this;
    }

    /**
     * User nickname
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @return $this
     *
     * @param string $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * @return Occupation
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * @return $this
     *
     * @param Occupation $occupation
     */
    public function setOccupation(Occupation $occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Information whether the user is online
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
     * @return Personal
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    /**
     * @return $this
     *
     * @param Personal $personal
     */
    public function setPersonal(Personal $personal)
    {
        $this->personal = $personal;

        return $this;
    }

    /**
     * URL of square photo of the user with 100 pixels in width
     * @return string
     */
    public function getPhoto100()
    {
        return $this->photo_100;
    }

    /**
     * @return $this
     *
     * @param string $photo_100
     */
    public function setPhoto100($photo_100)
    {
        $this->photo_100 = $photo_100;

        return $this;
    }

    /**
     * URL of square photo of the user with 200 pixels in width
     * @return string
     */
    public function getPhoto200()
    {
        return $this->photo_200;
    }

    /**
     * @return $this
     *
     * @param string $photo_200
     */
    public function setPhoto200($photo_200)
    {
        $this->photo_200 = $photo_200;

        return $this;
    }

    /**
     * URL of user's photo with 200 pixels in width
     * @return string
     */
    public function getPhoto200Orig()
    {
        return $this->photo_200_orig;
    }

    /**
     * @return $this
     *
     * @param string $photo_200_orig
     */
    public function setPhoto200Orig($photo_200_orig)
    {
        $this->photo_200_orig = $photo_200_orig;

        return $this;
    }

    /**
     * URL of user's photo with 400 pixels in width
     * @return string
     */
    public function getPhoto400Orig()
    {
        return $this->photo_400_orig;
    }

    /**
     * @return $this
     *
     * @param string $photo_400_orig
     */
    public function setPhoto400Orig($photo_400_orig)
    {
        $this->photo_400_orig = $photo_400_orig;

        return $this;
    }

    /**
     * URL of square photo of the user with 50 pixels in width
     * @return string
     */
    public function getPhoto50()
    {
        return $this->photo_50;
    }

    /**
     * @return $this
     *
     * @param string $photo_50
     */
    public function setPhoto50($photo_50)
    {
        $this->photo_50 = $photo_50;

        return $this;
    }

    /**
     * ID of the user's main photo
     * @return string
     */
    public function getPhotoId()
    {
        return $this->photo_id;
    }

    /**
     * @return $this
     *
     * @param string $photo_id
     */
    public function setPhotoId($photo_id)
    {
        $this->photo_id = $photo_id;

        return $this;
    }

    /**
     * URL of square photo of the user with maximum width
     * @return string
     */
    public function getPhotoMax()
    {
        return $this->photo_max;
    }

    /**
     * @return $this
     *
     * @param string $photo_max
     */
    public function setPhotoMax($photo_max)
    {
        $this->photo_max = $photo_max;

        return $this;
    }

    /**
     * URL of user's photo of maximum size
     * @return string
     */
    public function getPhotoMaxOrig()
    {
        return $this->photo_max_orig;
    }

    /**
     * @return $this
     *
     * @param string $photo_max_orig
     */
    public function setPhotoMaxOrig($photo_max_orig)
    {
        $this->photo_max_orig = $photo_max_orig;

        return $this;
    }

    /**
     * Favorite quotes
     * @return string
     */
    public function getQuotes()
    {
        return $this->quotes;
    }

    /**
     * @return $this
     *
     * @param string $quotes
     */
    public function setQuotes($quotes)
    {
        $this->quotes = $quotes;

        return $this;
    }

    /**
     * User relationship status
     * @return integer
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * @return $this
     *
     * @param integer $relation
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * @return UserMin
     */
    public function getRelationPartner()
    {
        return $this->relation_partner;
    }

    /**
     * @return $this
     *
     * @param UserMin $relation_partner
     */
    public function setRelationPartner(UserMin $relation_partner)
    {
        $this->relation_partner = $relation_partner;

        return $this;
    }

    /**
     * @return Relative[]
     */
    public function getRelatives()
    {
        return $this->relatives;
    }

    /**
     * @return $this
     *
     * @param array $relatives
     */
    public function setRelatives(array $relatives)
    {
        $this->relatives = $relatives;

        return $this;
    }

    /**
     * User's credentials as community admin
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return $this
     *
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return School[]
     */
    public function getSchools()
    {
        return $this->schools;
    }

    /**
     * @return $this
     *
     * @param array $schools
     */
    public function setSchools(array $schools)
    {
        $this->schools = $schools;

        return $this;
    }

    /**
     * Domain name of the user's page
     * @return string
     */
    public function getScreenName()
    {
        return $this->screen_name;
    }

    /**
     * @return $this
     *
     * @param string $screen_name
     */
    public function setScreenName($screen_name)
    {
        $this->screen_name = $screen_name;

        return $this;
    }

    /**
     * User sex
     *
     * @return integer
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return $this
     *
     * @param integer $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * User's website
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @return $this
     *
     * @param string $site
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * User's Skype nickname
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * @return $this
     *
     * @param string $skype
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * User's status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return $this
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Full
     */
    public function getStatusAudio()
    {
        return $this->status_audio;
    }

    /**
     * @return $this
     *
     * @param Full $status_audio
     */
    public function setStatusAudio(Full $status_audio)
    {
        $this->status_audio = $status_audio;

        return $this;
    }

    /**
     * User's timezone
     * @return integer
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @return $this
     *
     * @param integer $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * User's favorite tv shows
     *
     * @return string
     */
    public function getTv()
    {
        return $this->tv;
    }

    /**
     * @return $this
     *
     * @param string $tv
     */
    public function setTv($tv)
    {
        $this->tv = $tv;

        return $this;
    }

    /**
     * User's Twitter account
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @return $this
     *
     * @param string $twitter
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * @return University[]
     */
    public function getUniversities()
    {
        return $this->universities;
    }

    /**
     * @return $this
     *
     * @param array $universities
     */
    public function setUniversities(array $universities)
    {
        $this->universities = $universities;

        return $this;
    }

    /**
     * University ID
     *
     * @return integer
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * @return $this
     *
     * @param integer $university
     */
    public function setUniversity($university)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * University name
     * @return string
     */
    public function getUniversityName()
    {
        return $this->university_name;
    }

    /**
     * @return $this
     *
     * @param string $university_name
     */
    public function setUniversityName($university_name)
    {
        $this->university_name = $university_name;

        return $this;
    }

    /**
     * Information whether the user is verified
     * @return integer
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * @return $this
     *
     * @param integer $verified
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Information whether current user can comment wall posts
     * @return integer
     */
    public function getWallComments()
    {
        return $this->wall_comments;
    }

    /**
     * @return $this
     *
     * @param integer $wall_comments
     */
    public function setWallComments($wall_comments)
    {
        $this->wall_comments = $wall_comments;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'city'             => 'VkSdk\Base\Objects',
            'country'          => 'VkSdk\Base\Country',
            'status_audio'     => 'VkSdk\Audio\Includes\Full',
            'last_seen'        => 'VkSdk\Users\Includes\LastSeen',
            'crop_photo'       => 'VkSdk\Users\Includes\CropPhoto',
            'occupation'       => 'VkSdk\Users\Includes\Occupation',
            'career'           => [
                'class'  => 'VkSdk\Users\Includes\Career',
                'method' => 'addCareer'
            ],
            'military'         => [
                'class'  => 'VkSdk\Users\Includes\Military',
                'method' => 'addMilitary'
            ],
            'relation_partner' => 'VkSdk\Users\Includes\UserMin',
            'personal'         => 'VkSdk\Users\Includes\Personal',
            'universities'     => [
                'class'  => 'VkSdk\Users\Includes\University',
                'method' => 'addUniversitie'
            ],
            'schools'          => [
                'class'  => 'VkSdk\Users\Includes\School',
                'method' => 'addSchool'
            ],
            'relatives'        => [
                'class'  => 'VkSdk\Users\Includes\Relative',
                'method' => 'addRelative'
            ],
        ];
    }
}
