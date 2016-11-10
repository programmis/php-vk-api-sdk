<?php
namespace VkSdk\Wall;

use VkSdk\Includes\Request;

/**
 * Reposts (copies) an object to a user wall or community wall.
 * Class WallRepost
 *
 * @package VkSdk\Wall
 */
class WallRepost extends Request
{

    /**
     * @var integer
     */
    public $likes_count;

    /**
     * @var integer
     */
    public $post_id;

    /**
     * @var integer
     */
    public $reposts_count;

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $success;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["object"]);

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
     * Reposts number
     *
     * @return integer
     */
    public function getLikesCount()
    {
        return $this->likes_count;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "wall.repost";
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
     * Reposts number
     *
     * @return integer
     */
    public function getRepostsCount()
    {
        return $this->reposts_count;
    }

    /**
     * @return integer
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Target community ID when reposting to a community.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

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
     * Comment to be added along with the reposted object.
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
     * ID of the object to be reposted on the wall. Example:; "wall66748_3675"
     *
     * @return $this
     *
     * @param string $object
     */
    public function setObject($object)
    {
        $this->vkarg_object = $object;

        return $this;
    }
}
