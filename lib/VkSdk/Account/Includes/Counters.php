<?php
namespace VkSdk\Account\Includes;

/**
 * Class Counters
 *
 * @package VkSdk\Account\Includes
 */
class Counters
{

    /**
     * @var integer
     */
    public $app_requests;

    /**
     * @var integer
     */
    public $events;

    /**
     * @var integer
     */
    public $friends;

    /**
     * @var integer
     */
    public $gifts;

    /**
     * @var integer
     */
    public $groups;

    /**
     * @var integer
     */
    public $messages;

    /**
     * @var integer
     */
    public $notifications;

    /**
     * @var integer
     */
    public $photos;

    /**
     * @var integer
     */
    public $videos;

    /**
     * New app_requests number
     *
     * @return integer
     */
    public function getAppRequests()
    {
        return $this->app_requests;
    }

    /**
     * @return $this
     *
     * @param integer $app_requests
     */
    public function setAppRequests($app_requests)
    {
        $this->app_requests = $app_requests;

        return $this;
    }

    /**
     * New events number
     *
     * @return integer
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @return $this
     *
     * @param integer $events
     */
    public function setEvents($events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * New friends requests number
     *
     * @return integer
     */
    public function getFriends()
    {
        return $this->friends;
    }

    /**
     * @return $this
     *
     * @param integer $friends
     */
    public function setFriends($friends)
    {
        $this->friends = $friends;

        return $this;
    }

    /**
     * New gifts number
     *
     * @return integer
     */
    public function getGifts()
    {
        return $this->gifts;
    }

    /**
     * @return $this
     *
     * @param integer $gifts
     */
    public function setGifts($gifts)
    {
        $this->gifts = $gifts;

        return $this;
    }

    /**
     * New groups number
     *
     * @return integer
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return $this
     *
     * @param integer $groups
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * New messages number
     *
     * @return integer
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @return $this
     *
     * @param integer $messages
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * New notifications number
     *
     * @return integer
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * @return $this
     *
     * @param integer $notifications
     */
    public function setNotifications($notifications)
    {
        $this->notifications = $notifications;

        return $this;
    }

    /**
     * New photo tags number
     *
     * @return integer
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @return $this
     *
     * @param integer $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * New video tags number
     *
     * @return integer
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * @return $this
     *
     * @param integer $videos
     */
    public function setVideos($videos)
    {
        $this->videos = $videos;

        return $this;
    }
}
