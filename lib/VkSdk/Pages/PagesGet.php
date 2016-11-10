<?php

namespace VkSdk\Pages;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Pages\Includes\WikipageFull;

/**
 * Returns information about a wiki page.
 * Class PagesGet
 * @package VkSdk\Pages
 */
class PagesGet extends Request
{

    use AutoFillObject;

    /**
     * @var WikipageFull
     */
    private $response;

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
        return "pages.get";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Pages\Includes\WikipageFull',
        ];
    }

    /**
     * '1' — to return information about a global wiki page
     *
     * @return $this
     *
     * @param boolean $global
     */
    public function setGlobal($global)
    {
        $this->vkarg_global = $global;

        return $this;
    }

    /**
     * '1' — to return the page as HTML;
     *
     * @return $this
     *
     * @param boolean $need_html
     */
    public function setNeedHtml($need_html)
    {
        $this->vkarg_need_html = $need_html;

        return $this;
    }

    /**
     * @return $this
     *
     * @param boolean $need_source
     */
    public function setNeedSource($need_source)
    {
        $this->vkarg_need_source = $need_source;

        return $this;
    }

    /**
     * Page owner ID.
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
     * '1' — resulting wiki page is a preview for the attached link
     *
     * @return $this
     *
     * @param boolean $site_preview
     */
    public function setSitePreview($site_preview)
    {
        $this->vkarg_site_preview = $site_preview;

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
}
