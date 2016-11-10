<?php
namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Creates a new friend list for the current user.
 * Class FriendsAddList
 *
 * @package VkSdk\Friends
 */
class FriendsAddList extends Request
{

    /**
     * @var integer
     */
    public $list_id;

    /**
     * IDs of users to be added to the friend list.;
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
        $this->setRequiredParams(["name"]);

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
     * List ID
     *
     * @return integer
     */
    public function getListId()
    {
        return $this->list_id;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "friends.addList";
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
     * IDs of users to be added to the friend list.;
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
