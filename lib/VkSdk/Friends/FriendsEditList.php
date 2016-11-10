<?php
namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Edits a friend list of the current user.
 * Class FriendsEditList
 *
 * @package VkSdk\Friends
 */
class FriendsEditList extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * (Applies if 'user_ids' parameter is not set.); User IDs to add to the friend list.
     *
     * @return $this
     *
     * @param integer $add_user_id
     */
    public function addAddUserId($add_user_id)
    {
        $this->vkarg_add_user_ids[] = $add_user_id;

        return $this;
    }

    /**
     * (Applies if 'user_ids' parameter is not set.); User IDs to delete from the friend list.
     *
     * @return $this
     *
     * @param integer $delete_user_id
     */
    public function addDeleteUserId($delete_user_id)
    {
        $this->vkarg_delete_user_ids[] = $delete_user_id;

        return $this;
    }

    /**
     * IDs of users in the friend list.
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
        $this->setRequiredParams(["list_id"]);

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
        return "friends.editList";
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
     * (Applies if 'user_ids' parameter is not set.); User IDs to add to the friend list.
     *
     * @return $this
     *
     * @param array $add_user_ids
     */
    public function setAddUserIds(array $add_user_ids)
    {
        $this->vkarg_add_user_ids = $add_user_ids;

        return $this;
    }

    /**
     * (Applies if 'user_ids' parameter is not set.); User IDs to delete from the friend list.
     *
     * @return $this
     *
     * @param array $delete_user_ids
     */
    public function setDeleteUserIds(array $delete_user_ids)
    {
        $this->vkarg_delete_user_ids = $delete_user_ids;

        return $this;
    }

    /**
     * Friend list ID.
     *
     * @return $this
     *
     * @param integer $list_id
     */
    public function setListId($list_id)
    {
        $this->vkarg_list_id = $list_id;

        return $this;
    }

    /**
     * Name of the friend list.
     *
     * @return $this
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->vkarg_name = $name;

        return $this;
    }

    /**
     * IDs of users in the friend list.
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
