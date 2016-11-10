<?php
namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Returns a list of user IDs of the mutual friends of two users.
 * Class FriendsGetMutual
 *
 * @package VkSdk\Friends
 */
class FriendsGetMutual extends Request
{

    /**
     * IDs of the users whose friends will be checked against the friends of the user specified in 'source_uid'.
     *
     * @return $this
     *
     * @param integer $target_uid
     */
    public function addTargetUid($target_uid)
    {
        $this->vkarg_target_uids[] = $target_uid;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
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
        return "friends.getMutual";
    }

    /**
     * Number of mutual friends to return.
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of mutual friends.
     *
     * @return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * Sort order:; 'random' — random order
     *
     * @return $this
     *
     * @param string $order
     */
    public function setOrder($order)
    {
        $this->vkarg_order = $order;

        return $this;
    }

    /**
     * ID of the user whose friends will be checked against the friends of the user specified in 'target_uid'.
     *
     * @return $this
     *
     * @param integer $source_uid
     */
    public function setSourceUid($source_uid)
    {
        $this->vkarg_source_uid = $source_uid;

        return $this;
    }

    /**
     * ID of the user whose friends will be checked against the friends of the user specified in 'source_uid'.
     *
     * @return $this
     *
     * @param integer $target_uid
     */
    public function setTargetUid($target_uid)
    {
        $this->vkarg_target_uid = $target_uid;

        return $this;
    }

    /**
     * IDs of the users whose friends will be checked against the friends of the user specified in 'source_uid'.
     *
     * @return $this
     *
     * @param array $target_uids
     */
    public function setTargetUids(array $target_uids)
    {
        $this->vkarg_target_uids = $target_uids;

        return $this;
    }
}
