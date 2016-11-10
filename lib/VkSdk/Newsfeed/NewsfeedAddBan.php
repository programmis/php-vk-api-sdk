<?php
namespace VkSdk\Newsfeed;

use VkSdk\Includes\Request;

/**
 * Prevents news from specified users and communities from appearing in the current user's newsfeed.
 * Class NewsfeedAddBan
 *
 * @package VkSdk\Newsfeed
 */
class NewsfeedAddBan extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * @return $this
     *
     * @param integer $group_id
     */
    public function addGroupId($group_id)
    {
        $this->vkarg_group_ids[] = $group_id;

        return $this;
    }

    /**
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
        return "newsfeed.addBan";
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
     * @return $this
     *
     * @param array $group_ids
     */
    public function setGroupIds(array $group_ids)
    {
        $this->vkarg_group_ids = $group_ids;

        return $this;
    }

    /**
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
