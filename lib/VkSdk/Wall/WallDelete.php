<?php

namespace VkSdk\Wall;

use VkSdk\Includes\Request;

/**
 * Deletes a post from a user wall or community wall.
 *
 * Class WallDelete
 * @package VkSdk\Wall
 */
class WallDelete extends Request
{
    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * result in $this->getResponse();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->response = $json->response;

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
        return "wall.delete";
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
     * User ID or community ID. Use a negative value to designate a community ID.
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }

    /**
     * ID of the post to be deleted.
     *
     * @return $this
     *
     * @param integer $post_id
     */
    public function setPostId($post_id)
    {
        $this->vkarg_post_id = $post_id;

        return $this;
    }
}
