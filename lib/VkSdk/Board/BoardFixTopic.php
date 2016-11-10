<?php

namespace VkSdk\Board;

use VkSdk\Includes\Request;

/**
 * Pins a topic (fixes its place) to the top of a community's discussion board.
 * Class BoardFixTopic
 * @package VkSdk\Board
 */
class BoardFixTopic extends Request
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
        $this->setRequiredParams(["group_id", "topic_id"]);

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
        return "board.fixTopic";
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
     * ID of the community that owns the discussion board.
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
     * Topic ID.
     *
     * @return $this
     *
     * @param integer $topic_id
     */
    public function setTopicId($topic_id)
    {
        $this->vkarg_topic_id = $topic_id;

        return $this;
    }
}
