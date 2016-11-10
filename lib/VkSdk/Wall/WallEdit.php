<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;

/**
 * Edits a post on a user wall or community wall.
 * Class WallEdit
 * @package VkSdk\Wall
 */
class WallEdit extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * (Required if 'message' is not set.) List of objects attached to the post, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media attachment:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; '<owner_id>' — ID of the media application owner.; '<media_id>' — Media application ID. ; ; Example:; "photo100172_166443618,photo66748_265827614"; May contain a link to an external page to include in the post. Example:; "photo66748_265827614,http://habrahabr.ru"; "NOTE: If more than one link is being attached, an error is thrown."
     *
     * @return $this
     *
     * @param string $attachment
     */
    public function addAttachment($attachment)
    {
        $this->vkarg_attachments[] = $attachment;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["post_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
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
        return "wall.edit";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * (Required if 'message' is not set.) List of objects attached to the post, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media attachment:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; '<owner_id>' — ID of the media application owner.; '<media_id>' — Media application ID. ; ; Example:; "photo100172_166443618,photo66748_265827614"; May contain a link to an external page to include in the post. Example:; "photo66748_265827614,http://habrahabr.ru"; "NOTE: If more than one link is being attached, an error is thrown."
     *
     * @return $this
     *
     * @param array $attachments
     */
    public function setAttachments(array $attachments)
    {
        $this->vkarg_attachments = $attachments;

        return $this;
    }

    /**
     * (Applies only when editing a scheduled post.); '1' — post will be available to friends only; '0' — post will be available to all users (default)
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
     * Geographical latitude of the check-in, in degrees (from -90 to 90).
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
     * Geographical longitude of the check-in, in degrees (from -180 to 180).
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
     * Post ID.
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
     * (Applies only to a scheduled post.) Publication date (in Unix time). If used, posting will be delayed until the set time.
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
     * (Applies only to a scheduled post.) List of services or websites where status will be updated, if the user has so requested. Sample values: 'twitter', 'facebook'.
     * see ServicesValues::SERVICE_* constants
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
     * (Applies only to a post that was created "as community" on a community wall.); '1' — to add the signature of the user who created the post
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
