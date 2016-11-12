<?php

namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Allows to reorder links in the community.
 *
 * Class GroupsReorderLink
 * @package VkSdk\Groups
 */
class GroupsReorderLink extends Request
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
        $this->setRequiredParams(["group_id", "link_id"]);

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
        return "groups.reorderLink";
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
     * ID of the link after which to place the link with 'link_id'.
     *
     * @return $this
     *
     * @param integer $after
     */
    public function setAfter($after)
    {
        $this->vkarg_after = $after;

        return $this;
    }

    /**
     * Community ID.
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
     * Link ID.
     *
     * @return $this
     *
     * @param integer $link_id
     */
    public function setLinkId($link_id)
    {
        $this->vkarg_link_id = $link_id;

        return $this;
    }
}
