<?php
namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Approves or creates a friend request.
 * Class FriendsAdd

*
 * @package VkSdk\Friends
 */
class FriendsAdd extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["user_id"]);

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
        return "friends.add";
    }

    /**
     * '1' to pass an incoming request to followers list.
     *
*@return $this
     *
     * @param boolean $follow
     */
    public function setFollow($follow)
    {
        $this->vkarg_follow = $follow;

        return $this;
    }

    /**
     * Text of the message (up to 500 characters) for the friend request, if any.
     *
     *@return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->vkarg_text = $text;

        return $this;
    }

    /**
     * ID of the user whose friend request will be approved or to whom a friend request will be sent.
     *
*@return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
	}
}
