<?php

namespace VkSdk\Newsfeed;

use VkSdk\Includes\Request;

/**
 * Unsubscribes the current user from specified newsfeeds.
 * Class NewsfeedUnsubscribe
 * @package VkSdk\Newsfeed
 */
class NewsfeedUnsubscribe extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["type", "item_id"]);

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
        return "newsfeed.unsubscribe";
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
     * Object ID.
     *
     * @return $this
     *
     * @param integer $item_id
     */
    public function setItemId($item_id)
    {
        $this->vkarg_item_id = $item_id;

        return $this;
    }

    /**
     * Object owner ID.
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
     * Type of object from which to unsubscribe:; 'note' — note; 'photo' — photo; 'post' — post on user wall or community wall; 'topic' — topic; 'video' — video
     *
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->vkarg_type = $type;

        return $this;
    }
}
