<?php
namespace VkSdk\Pages;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Pages\Includes\WikipageFull;

/**
 * Returns the text of one of the previous versions of a wiki page.
 * Class PagesGetVersion
 *
 * @package VkSdk\Pages
 */
class PagesGetVersion extends Request
{

    use AutoFillObject;

    /**
     * @var WikipageFull
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["version_id"]);

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
        return "pages.getVersion";
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
     * '1' — to return the page as HTML
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
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $version_id
     */
    public function setVersionId($version_id)
    {
        $this->vkarg_version_id = $version_id;

        return $this;
    }
}
