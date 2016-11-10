<?php
namespace VkSdk\Ads;

use lib\AutoFillObject;
use VkSdk\Ads\Includes\LinkStatus;
use VkSdk\Includes\Request;

/**
 * Allows to check the ad link.
 * Class AdsCheckLink
 *
 * @package VkSdk\Ads
 */
class AdsCheckLink extends Request
{

    use AutoFillObject;

    /**
     * @var LinkStatus
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id", "link_type", "link_url"]);

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
        return "ads.checkLink";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Ads\Includes\LinkStatus',
        ];
    }

    /**
     * Advertising account ID.
     *
     * @return $this
     *
     * @param integer $account_id
     */
    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;

        return $this;
    }

    /**
     * Campaign ID
     *
     * @return $this
     *
     * @param integer $campaign_id
     */
    public function setCampaignId($campaign_id)
    {
        $this->vkarg_campaign_id = $campaign_id;

        return $this;
    }

    /**
     * Object type:; *'community' — community;; *'post' — community post;; *'application' — VK application;; *'video' — video;; *'site' — external site.
     *
     * @return $this
     *
     * @param string $link_type
     */
    public function setLinkType($link_type)
    {
        $this->vkarg_link_type = $link_type;

        return $this;
    }

    /**
     * Object URL.
     *
     * @return $this
     *
     * @param string $link_url
     */
    public function setLinkUrl($link_url)
    {
        $this->vkarg_link_url = $link_url;

        return $this;
    }
}
