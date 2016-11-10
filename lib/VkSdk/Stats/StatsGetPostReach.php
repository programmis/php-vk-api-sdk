<?php

namespace VkSdk\Stats;

use VkSdk\Includes\Request;

/**
 * Returns stats for a wall post.
 * Class StatsGetPostReach
 * @package VkSdk\Stats
 */
class StatsGetPostReach extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id", "post_id"]);

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
        return "stats.getPostReach";
    }

    /**
     * post owner community id. Specify with "-" sign.
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
     * wall post id. Note that stats are available only for '300' last (newest) posts on a community wall.
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
