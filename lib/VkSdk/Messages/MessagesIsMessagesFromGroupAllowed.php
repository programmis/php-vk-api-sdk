<?php
namespace VkSdk\Messages;

use VkSdk\Includes\Request;

/**
 * Returns information whether sending messages from the community to current user is allowed.
 * Class MessagesIsMessagesFromGroupAllowed
 *
 * @package VkSdk\Messages
 */
class MessagesIsMessagesFromGroupAllowed extends Request
{

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $is_allowed;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id", "user_id"]);

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
     * @return integer
     */
    public function getIsAllowed()
    {
        return $this->is_allowed;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "messages.isMessagesFromGroupAllowed";
    }

    /**
     * Group ID.
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
