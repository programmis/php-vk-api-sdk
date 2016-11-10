<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Declines a friend request or deletes a user from the current user's friend list.
 * Class FriendsDelete
 * @package VkSdk\Friends
 */
class FriendsDelete extends Request
{

    /**
     * @var integer
     */
    private $friend_deleted;

    /**
     * @var integer
     */
    private $in_request_deleted;

    /**
     * @var integer
     */
    private $out_request_deleted;

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $success;

    /**
     * @var integer
     */
    private $suggestion_deleted;

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
     * Returns 1 if friend has been deleted
     *
     * @return integer
     */
    public function getFriendDeleted()
    {
        return $this->friend_deleted;
    }

    /**
     * Returns 1 if incoming request has been declined
     *
     * @return integer
     */
    public function getInRequestDeleted()
    {
        return $this->in_request_deleted;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "friends.delete";
    }

    /**
     * Returns 1 if out request has been canceled
     *
     * @return integer
     */
    public function getOutRequestDeleted()
    {
        return $this->out_request_deleted;
    }

    /**
     * @return integer
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Returns 1 if suggestion has been declined
     *
     * @return integer
     */
    public function getSuggestionDeleted()
    {
        return $this->suggestion_deleted;
    }

    /**
     * ID of the user whose friend request is to be declined or who is to be deleted from the current user's friend list.
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
