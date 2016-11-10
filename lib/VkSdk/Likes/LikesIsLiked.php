<?php
namespace VkSdk\Likes;

use VkSdk\Includes\Request;

/**
 * Checks for the object in the 'Likes' list of the specified user.
 * Class LikesIsLiked
 *
 * @package VkSdk\Likes
 */
class LikesIsLiked extends Request
{

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $copied;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $liked;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["type", "item_id"]);

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
     * Information whether user reposted the object
     *
     * @return integer
     */
    public function getCopied()
    {
        return $this->copied;
    }

    /**
     * Information whether user liked the object
     *
     * @return integer
     */
    public function getLiked()
    {
        return $this->liked;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "likes.isLiked";
    }

    /**
     * Object ID.
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
     * ID of the user or community that owns the object.
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
     * Object type:; 'post' — post on user or community wall; 'comment' — comment on a wall post; 'photo' — photo; 'audio' — audio; 'video' — video; 'note' — note; 'photo_comment' — comment on the photo; 'video_comment' — comment on the video; 'topic_comment' — comment in the discussion
     *
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->vkarg_type = $type;

        return $this;
    }

    /**
     * User ID.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
