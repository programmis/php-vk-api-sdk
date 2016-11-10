<?php
namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Edits the friend lists of the selected user.
 * Class FriendsEdit
 *
 * @package VkSdk\Friends
 */
class FriendsEdit extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * IDs of the friend lists to which to add the user.
     *
     * @return $this
     *
     * @param integer $list_id
     */
    public function addListId($list_id)
    {
        $this->vkarg_list_ids[] = $list_id;

        return $this;
    }

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
        return "friends.edit";
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
     * IDs of the friend lists to which to add the user.
     *
     * @return $this
     *
     * @param array $list_ids
     */
    public function setListIds(array $list_ids)
    {
        $this->vkarg_list_ids = $list_ids;

        return $this;
    }

    /**
     * ID of the user whose friend list is to be edited.
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
