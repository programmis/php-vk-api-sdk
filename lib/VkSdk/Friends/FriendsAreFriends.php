<?php
namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Checks the current user's friendship status with other specified users.
 * Class FriendsAreFriends
 *
 * @package VkSdk\Friends
 */
class FriendsAreFriends extends Request
{

    /**
     * IDs of the users whose friendship status to check.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function addUserId($user_id)
    {
        $this->vkarg_user_ids[] = $user_id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["user_ids"]);

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
        return "friends.areFriends";
    }

    /**
     * '1' — to return 'sign' field. 'sign' is md5("{id}_{user_id}_{friends_status}_{application_secret}"), where id is current user ID.; This field allows to check that data has not been modified by the client.; By default: '0'.
     *
     * @return $this
     *
     * @param boolean $need_sign
     */
    public function setNeedSign($need_sign)
    {
        $this->vkarg_need_sign = $need_sign;

        return $this;
    }

    /**
     * IDs of the users whose friendship status to check.
     *
     * @return $this
     *
     * @param array $user_ids
     */
    public function setUserIds(array $user_ids)
    {
        $this->vkarg_user_ids = $user_ids;

        return $this;
    }
}
