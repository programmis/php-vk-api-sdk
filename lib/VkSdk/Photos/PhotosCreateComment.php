<?php
namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Adds a new comment on the photo.
 * Class PhotosCreateComment
 *
 * @package VkSdk\Photos
 */
class PhotosCreateComment extends Request
{

    /**
     * (Required if 'message' is not set.) List of objects attached to the post, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media attachment:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; '<owner_id>' — Media attachment owner ID.; '<media_id>' — Media attachment ID.; ; Example:; "photo100172_166443618,photo66748_265827614"
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
        $this->setRequiredParams(["photo_id"]);

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
        return "photos.createComment";
    }

    /**
     * @return $this
     *
     * @param string $access_key
     */
    public function setAccessKey($access_key)
    {
        $this->vkarg_access_key = $access_key;

        return $this;
    }

    /**
     * (Required if 'message' is not set.) List of objects attached to the post, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; '' — Type of media attachment:; 'photo' — photo; 'video' — video; 'audio' — audio; 'doc' — document; '<owner_id>' — Media attachment owner ID.; '<media_id>' — Media attachment ID.; ; Example:; "photo100172_166443618,photo66748_265827614"
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
     * '1' — to post a comment from the community
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
     * Comment text.
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
     * ID of the user or community that owns the photo.
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
     * Photo ID.
     *
     * @return $this
     *
     * @param integer $photo_id
     */
    public function setPhotoId($photo_id)
    {
        $this->vkarg_photo_id = $photo_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $reply_to_comment
     */
    public function setReplyToComment($reply_to_comment)
    {
        $this->vkarg_reply_to_comment = $reply_to_comment;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $sticker_id
     */
    public function setStickerId($sticker_id)
    {
        $this->vkarg_sticker_id = $sticker_id;

        return $this;
    }
}
