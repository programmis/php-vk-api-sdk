<?php

namespace VkSdk\Wall;

use lib\AutoFillObject;
use VkSdk\Includes\Request;

/**
 * Adds a new post on a user wall or community wall. Can also be used to publish suggested or scheduled posts.
 * Class WallPost
 * @package VkSdk\Wall
 */
class WallPost extends Request
{
    use AutoFillObject;

    /**
     * @var integer
     */
    private $post_id;

    /** @var array $attachments */
    private $attachments = [];

    /**
     * (Required if 'message' is not set.) List of objects attached to the post, in the following format:;
     * "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media attachment:; 'photo' — photo; 'video' — video;
     * 'audio' — audio; 'doc' — document; 'page' — wiki-page; 'note' — note; 'poll' — poll; 'album' — photo album;
     * '<owner_id>' — ID of the media application owner. ; '<media_id>' — Media application ID.; ; Example:;
     * "photo100172_166443618,photo66748_265827614"; May contain a link to an external page to include in the post.
     * Example:; "photo66748_265827614,http://habrahabr.ru"; "NOTE: If more than one link is being attached, an error
     * will be thrown."
     *
     * @return $this
     *
     * @param string $attachment
     */
    public function addAttachment($attachment)
    {
        $this->attachments[] = $attachment;

        return $this;
    }

    /**
     * result in $this->getPostId();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setParameter('attachments', $this->attachments);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->fillByJson($json);

                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "wall.post";
    }

    /**
     * Created post ID
     *
     * @return integer
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * Post ID. Used for publishing of scheduled and suggested posts.
     *
     * @return $this
     *
     * @param integer $post_id
     */
    public function setPostId($post_id)
    {
        $this->vkarg_post_id = $post_id;

        return $this;
    }

    /**
     * (Required if 'message' is not set.) List of objects attached to the post, in the following format:;
     * "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media attachment:; 'photo' — photo; 'video' — video;
     * 'audio' — audio; 'doc' — document; 'page' — wiki-page; 'note' — note; 'poll' — poll; 'album' — photo album;
     * '<owner_id>' — ID of the media application owner. ; '<media_id>' — Media application ID.; ; Example:;
     * "photo100172_166443618,photo66748_265827614"; May contain a link to an external page to include in the post.
     * Example:; "photo66748_265827614,http://habrahabr.ru"; "NOTE: If more than one link is being attached, an error
     * will be thrown."
     *
     * @return $this
     *
     * @param array $attachments
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * '1' — post will be available to friends only; '0' — post will be available to all users (default)
     *
     * @return $this
     *
     * @param boolean $friends_only
     */
    public function setFriendsOnly($friends_only)
    {
        $this->vkarg_friends_only = $friends_only;

        return $this;
    }

    /**
     * For a community:; '1' — post will be published by the community; '0' — post will be published by the user
     * (default)
     *
     * @return $this
     *
     * @param boolean $from_group
     */
    public function setFromGroup($from_group)
    {
        $this->vkarg_from_group = $from_group;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $guid
     */
    public function setGuid($guid)
    {
        $this->vkarg_guid = $guid;

        return $this;
    }

    /**
     * Geographical latitude of a check-in, in degrees (from -90 to 90).
     *
     * @return $this
     *
     * @param number $lat
     */
    public function setLat(number $lat)
    {
        $this->vkarg_lat = $lat;

        return $this;
    }

    /**
     * Geographical longitude of a check-in, in degrees (from -180 to 180).
     *
     * @return $this
     *
     * @param number $long
     */
    public function setLong(number $long)
    {
        $this->vkarg_long = $long;

        return $this;
    }

    /**
     * @return $this
     *
     * @param boolean $mark_as_ads
     */
    public function setMarkAsAds($mark_as_ads)
    {
        $this->vkarg_mark_as_ads = $mark_as_ads;

        return $this;
    }

    /**
     * (Required if 'attachments' is not set.) Text of the post.
     *
     * @return $this
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->vkarg_message = $message;

        return $this;
    }

    /**
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }

    /**
     * ID of the location where the user was tagged.
     *
     * @return $this
     *
     * @param integer $place_id
     */
    public function setPlaceId($place_id)
    {
        $this->vkarg_place_id = $place_id;

        return $this;
    }

    /**
     * Publication date (in Unix time). If used, posting will be delayed until the set time.
     *
     * @return $this
     *
     * @param integer $publish_date
     */
    public function setPublishDate($publish_date)
    {
        $this->vkarg_publish_date = $publish_date;

        return $this;
    }

    /**
     * List of services or websites the update will be exported to, if the user has so requested. Sample values:
     * 'twitter', 'facebook'. see ServicesValues::SERVICE_* constants
     *
     * @return $this
     *
     * @param string $services
     */
    public function setServices($services)
    {
        $this->vkarg_services = $services;

        return $this;
    }

    /**
     * Only for posts in communities with 'from_group' set to '1':; '1' — post will be signed with the name of the
     * posting user; '0' — post will not be signed (default)
     *
     * @return $this
     *
     * @param boolean $signed
     */
    public function setSigned($signed)
    {
        $this->vkarg_signed = $signed;

        return $this;
    }
}
