<?php

namespace VkSdk\Pages;

use VkSdk\Includes\Request;

/**
 * Returns a list of all previous versions of a wiki page.
 * Class PagesGetHistory
 * @package VkSdk\Pages
 */
class PagesGetHistory extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["page_id"]);

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
        return "pages.getHistory";
    }

    /**
     * ID of the community that owns the wiki page.
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
     * Wiki page ID.
     *
     * @return $this
     *
     * @param integer $page_id
     */
    public function setPageId($page_id)
    {
        $this->vkarg_page_id = $page_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
