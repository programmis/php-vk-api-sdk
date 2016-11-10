<?php

namespace VkSdk\Groups;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupLink;
use VkSdk\Includes\Request;

/**
 * Allows to add a link to the community.
 * Class GroupsAddLink
 * @package VkSdk\Groups
 */
class GroupsAddLink extends Request
{

    use AutoFillObject;

    /**
     * @var GroupLink
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id", "link"]);

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
        return "groups.addLink";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Groups\Includes\GroupLink',
        ];
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
     * LInk URL.
     *
     * @return $this
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->vkarg_link = $link;

        return $this;
    }

    /**
     * Description text for the link.
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
