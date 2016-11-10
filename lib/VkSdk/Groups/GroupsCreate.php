<?php

namespace VkSdk\Groups;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\Group;
use VkSdk\Includes\Request;

/**
 * Creates a new community.
 * Class GroupsCreate
 * @package VkSdk\Groups
 */
class GroupsCreate extends Request
{

    use AutoFillObject;

    /**
     * 'event' – event
     */
    const TYPE_EVENT = 'event';

    /**
     * 'group' – group
     */
    const TYPE_GROUP = 'group';

    /**
     * 'public' – public page
     */
    const TYPE_PUBLIC = 'public';

    /**
     * @var Group
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["title"]);

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
        return "groups.create";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Groups\Includes\Group',
        ];
    }

    /**
     * Community description (ignored for 'type' = 'public').
     *
     * @return $this
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->vkarg_description = $description;

        return $this;
    }

    /**
     * Category ID (for 'type' = 'public' only).
     *
     * @return $this
     *
     * @param integer $public_category
     */
    public function setPublicCategory($public_category)
    {
        $this->vkarg_public_category = $public_category;

        return $this;
    }

    /**
     * Public page subtype. Possible values:; *'1' – place or small business;; *'2' – company, organizaton or website;; *'3' – famous person or group of people;; *'4' – product or work of art.
     *
     * @return $this
     *
     * @param integer $subtype
     */
    public function setSubtype($subtype)
    {
        $this->vkarg_subtype = $subtype;

        return $this;
    }

    /**
     * Community title.
     *
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->vkarg_title = $title;

        return $this;
    }

    /**
     * Community type. Possible values:; *'group' – group;; *'event' – event;; *'public' – public page
     * see self::TYPE_* constants
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
