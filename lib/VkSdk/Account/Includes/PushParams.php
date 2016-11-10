<?php
namespace VkSdk\Account\Includes;

/**
 * Class PushParams
 *
 * @package VkSdk\Account\Includes
 */
class PushParams
{

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $app_request;

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $birthday;

    /**
     * @var array(array)
     */
    public $chat;

    /**
     * @var array(array)
     */
    public $comment;

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $event_soon;

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $friend;

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $friend_accepted;

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $friend_found;

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $group_accepted;

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $group_invite;

    /**
     * @var array(array)
     */
    public $like;

    /**
     * @var array(array)
     */
    public $mention;

    /**
     * @var array(array)
     */
    public $msg;

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $new_post;

    /**
     * @var array(array)
     */
    public $photos_tag;

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $reply;

    /**
     * @var array(array)
     */
    public $repost;

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $sdk_open;

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $wall_post;

    /**
     * See constants of class OnoffOptions
     *
     * @var string
     */
    public $wall_publish;

    /**
     * @return string(string)
     */
    public function getAppRequest()
    {
        return $this->app_request;
    }

    /**
     * @return $this
     *
     * @param array $app_request
     */
    public function setAppRequest(array $app_request)
    {
        $this->app_request = $app_request;

        return $this;
    }

    /**
     * @return string(string)
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return $this
     *
     * @param array $birthday
     */
    public function setBirthday(array $birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * @return array(array)[]
     */
    public function getChat()
    {
        return $this->chat;
    }

    /**
     * @return $this
     *
     * @param array $chat
     */
    public function setChat(array $chat)
    {
        $this->chat = $chat;

        return $this;
    }

    /**
     * @return array(array)[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return $this
     *
     * @param array $comment
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return string(string)
     */
    public function getEventSoon()
    {
        return $this->event_soon;
    }

    /**
     * @return $this
     *
     * @param array $event_soon
     */
    public function setEventSoon(array $event_soon)
    {
        $this->event_soon = $event_soon;

        return $this;
    }

    /**
     * @return string(string)
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * @return $this
     *
     * @param array $friend
     */
    public function setFriend(array $friend)
    {
        $this->friend = $friend;

        return $this;
    }

    /**
     * @return string(string)
     */
    public function getFriendAccepted()
    {
        return $this->friend_accepted;
    }

    /**
     * @return $this
     *
     * @param array $friend_accepted
     */
    public function setFriendAccepted(array $friend_accepted)
    {
        $this->friend_accepted = $friend_accepted;

        return $this;
    }

    /**
     * @return string(string)
     */
    public function getFriendFound()
    {
        return $this->friend_found;
    }

    /**
     * @return $this
     *
     * @param array $friend_found
     */
    public function setFriendFound(array $friend_found)
    {
        $this->friend_found = $friend_found;

        return $this;
    }

    /**
     * @return string(string)
     */
    public function getGroupAccepted()
    {
        return $this->group_accepted;
    }

    /**
     * @return $this
     *
     * @param array $group_accepted
     */
    public function setGroupAccepted(array $group_accepted)
    {
        $this->group_accepted = $group_accepted;

        return $this;
    }

    /**
     * @return string(string)
     */
    public function getGroupInvite()
    {
        return $this->group_invite;
    }

    /**
     * @return $this
     *
     * @param array $group_invite
     */
    public function setGroupInvite(array $group_invite)
    {
        $this->group_invite = $group_invite;

        return $this;
    }

    /**
     * @return array(array)[]
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     * @return $this
     *
     * @param array $like
     */
    public function setLike(array $like)
    {
        $this->like = $like;

        return $this;
    }

    /**
     * @return array(array)[]
     */
    public function getMention()
    {
        return $this->mention;
    }

    /**
     * @return $this
     *
     * @param array $mention
     */
    public function setMention(array $mention)
    {
        $this->mention = $mention;

        return $this;
    }

    /**
     * @return array(array)[]
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @return $this
     *
     * @param array $msg
     */
    public function setMsg(array $msg)
    {
        $this->msg = $msg;

        return $this;
    }

    /**
     * @return string(string)
     */
    public function getNewPost()
    {
        return $this->new_post;
    }

    /**
     * @return $this
     *
     * @param array $new_post
     */
    public function setNewPost(array $new_post)
    {
        $this->new_post = $new_post;

        return $this;
    }

    /**
     * @return array(array)[]
     */
    public function getPhotosTag()
    {
        return $this->photos_tag;
    }

    /**
     * @return $this
     *
     * @param array $photos_tag
     */
    public function setPhotosTag(array $photos_tag)
    {
        $this->photos_tag = $photos_tag;

        return $this;
    }

    /**
     * @return string(string)
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * @return $this
     *
     * @param array $reply
     */
    public function setReply(array $reply)
    {
        $this->reply = $reply;

        return $this;
    }

    /**
     * @return array(array)[]
     */
    public function getRepost()
    {
        return $this->repost;
    }

    /**
     * @return $this
     *
     * @param array $repost
     */
    public function setRepost(array $repost)
    {
        $this->repost = $repost;

        return $this;
    }

    /**
     * @return string(string)
     */
    public function getSdkOpen()
    {
        return $this->sdk_open;
    }

    /**
     * @return $this
     *
     * @param array $sdk_open
     */
    public function setSdkOpen(array $sdk_open)
    {
        $this->sdk_open = $sdk_open;

        return $this;
    }

    /**
     * @return string(string)
     */
    public function getWallPost()
    {
        return $this->wall_post;
    }

    /**
     * @return $this
     *
     * @param array $wall_post
     */
    public function setWallPost(array $wall_post)
    {
        $this->wall_post = $wall_post;

        return $this;
    }

    /**
     * @return string(string)
     */
    public function getWallPublish()
    {
        return $this->wall_publish;
    }

    /**
     * @return $this
     *
     * @param array $wall_publish
     */
    public function setWallPublish(array $wall_publish)
    {
        $this->wall_publish = $wall_publish;

        return $this;
    }
}
