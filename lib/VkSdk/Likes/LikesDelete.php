<?php
namespace VkSdk\Likes;

use VkSdk\Includes\Request;

/**
 * Deletes the specified object from the 'Likes' list of the current user.
 * Class LikesDelete
 *
 * @package VkSdk\Likes
 */
class LikesDelete extends Request
{

    /**
     * @var integer
     */
    public $likes;

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
     * Total likes number
     *
     * @return integer
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "likes.delete";
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
     * Object type:; 'post' — post on user or community wall; 'comment' — comment on a wall post; 'photo' — photo; 'audio' — audio; 'video' — video; 'note' — note; 'photo_comment' — comment on the photo; 'video_comment' — comment on the video; 'topic_comment' — comment in the discussion; 'sitepage' — page of the site where the  is installed
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
}
