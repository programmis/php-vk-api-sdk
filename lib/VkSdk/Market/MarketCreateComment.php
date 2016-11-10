<?php
namespace VkSdk\Market;

use VkSdk\Includes\Request;

/**
 * Creates a new comment for an item.
 * Class MarketCreateComment
 *
 * @package VkSdk\Market
 */
class MarketCreateComment extends Request
{

    /**
     * Comma-separated list of objects attached to a comment. The field is submitted the following way: ; "'<owner_id>_<media_id>,<owner_id>_<media_id>'"; ; '' - media attachment type:; "'photo' - photo; 'video' - video; 'audio' - audio; 'doc' - document"; ; '<owner_id>' - media owner id; '<media_id>' - media attachment id; ; For example:; "photo100172_166443618,photo66748_265827614";
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
        $this->setRequiredParams(["owner_id", "item_id"]);

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
        return "market.createComment";
    }

    /**
     * Comma-separated list of objects attached to a comment. The field is submitted the following way: ; "'<owner_id>_<media_id>,<owner_id>_<media_id>'"; ; '' - media attachment type:; "'photo' - photo; 'video' - video; 'audio' - audio; 'doc' - document"; ; '<owner_id>' - media owner id; '<media_id>' - media attachment id; ; For example:; "photo100172_166443618,photo66748_265827614";
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
     * '1' - comment will be published on behalf of a community, '0' - on behalf of a user (by default).
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
     * Random value to avoid resending one comment.
     *
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
     * Item ID.
     *
     * @return $this
     *
     * @param integer $item_id
     */
    public function setItemId($item_id)
    {
        $this->vkarg_item_id = $item_id;

        return $this;
    }

    /**
     * Comment text (required if 'attachments' parameter is not specified)
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
     * ID of an item owner community.
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
     * ID of a comment to reply with current comment to.
     *
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
     * Sticker ID.
     *
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
