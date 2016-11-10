<?php

namespace VkSdk\Pages;

use VkSdk\Includes\Request;

/**
 * Saves modified read and edit access settings for a wiki page.
 * Class PagesSaveAccess
 * @package VkSdk\Pages
 */
class PagesSaveAccess extends Request
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
        return "pages.saveAccess";
    }

    /**
     * Who can edit the wiki page:; '1' — only community members; '2' — all users can edit the page; '0' — only community managers
     *
     * @return $this
     *
     * @param integer $edit
     */
    public function setEdit($edit)
    {
        $this->vkarg_edit = $edit;

        return $this;
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

    /**
     * Who can view the wiki page:; '1' — only community members; '2' — all users can view the page; '0' — only community managers
     *
     * @return $this
     *
     * @param integer $view
     */
    public function setView($view)
    {
        $this->vkarg_view = $view;

        return $this;
    }
}
