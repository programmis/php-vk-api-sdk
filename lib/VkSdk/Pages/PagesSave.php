<?php

namespace VkSdk\Pages;

use VkSdk\Includes\Request;

/**
 * Saves the text of a wiki page.
 * Class PagesSave
 * @package VkSdk\Pages
 */
class PagesSave extends Request
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
        return "pages.save";
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
     * Wiki page ID. The 'title' parameter can be passed instead of 'pid'.
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
     * Text of the wiki page in wiki-format.
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

    /**
     * Wiki page title.
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
