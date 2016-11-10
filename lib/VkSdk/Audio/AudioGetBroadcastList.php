<?php
namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Returns a list of the user's friends and communities that are broadcasting music in their statuses.
 * Class AudioGetBroadcastList
 *
 * @package VkSdk\Audio
 */
class AudioGetBroadcastList extends Request
{

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
        return "audio.getBroadcastList";
    }

    /**
     * '1' — to return only friends and communities that are broadcasting at the moment.; '0' — to return all friends and communities (default).
     *
     * @return $this
     *
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->vkarg_active = $active;

        return $this;
    }

    /**
     * Types of objects to return:; 'friends' — only friends; 'groups' — only communities; 'all' — both friends and communities (default)
     *
     * @return $this
     *
     * @param string $filter
     */
    public function setFilter($filter)
    {
        $this->vkarg_filter = $filter;

        return $this;
    }
}
