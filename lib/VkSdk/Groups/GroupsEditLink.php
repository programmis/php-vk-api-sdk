<?php

namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Allows to edit a link in the community.
 * Class GroupsEditLink
 * @package VkSdk\Groups
 */
class GroupsEditLink extends Request
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
        $this->setRequiredParams(["group_id", "link_id"]);

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
        return "groups.editLink";
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

    /**
     * New description text for the link.
     *
     * @return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->vkarg_text = $text;

        return $this;
    }
}
