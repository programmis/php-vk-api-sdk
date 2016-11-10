<?php
namespace VkSdk\Ads;

use lib\AutoFillObject;
use VkSdk\Ads\Includes\TargStats;
use VkSdk\Includes\Request;

/**
 * Returns the size of targeting audience, and also recommended values for CPC and CPM.
 * Class AdsGetTargetingStats
 *
 * @package VkSdk\Ads
 */
class AdsGetTargetingStats extends Request
{

    use AutoFillObject;

    /**
     * @var TargStats
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id", "link_url"]);

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
        return "ads.getTargetingStats";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Ads\Includes\TargStats',
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
     * Ad format. Possible values:; *'1' — image and text;; *'2' — big image;; *'3' — exclusive format;; *'4' — community, square image;; *'7' — special app format;; *'8' — special community format;; *'9' — post in community;; *'10' — app board.
     *
     * @return $this
     *
     * @param integer $ad_format
     */
    public function setAdFormat($ad_format)
    {
        $this->vkarg_ad_format = $ad_format;

        return $this;
    }

    /**
     * ID of an ad which targeting parameters shall be analyzed.
     *
     * @return $this
     *
     * @param integer $ad_id
     */
    public function setAdId($ad_id)
    {
        $this->vkarg_ad_id = $ad_id;

        return $this;
    }

    /**
     * Platforms to use for ad showing. Possible values:; (for 'ad_format' = '1'); *'0' — VK and partner sites;; *'1' — VK only.; (for 'ad_format' = '9'); *'all' — all platforms;; *'desktop' — desktop version;; *'mobile' — mobile version and apps.
     *
     * @return $this
     *
     * @param string $ad_platform
     */
    public function setAdPlatform($ad_platform)
    {
        $this->vkarg_ad_platform = $ad_platform;

        return $this;
    }

    /**
     * Serialized JSON object that describes targeting parameters. Description of 'criteria' object see below.
     *
     * @return $this
     *
     * @param string $criteria
     */
    public function setCriteria($criteria)
    {
        $this->vkarg_criteria = $criteria;

        return $this;
    }

    /**
     * Domain of the advertised object.
     *
     * @return $this
     *
     * @param string $link_domain
     */
    public function setLinkDomain($link_domain)
    {
        $this->vkarg_link_domain = $link_domain;

        return $this;
    }

    /**
     * URL for the advertised object.
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
