<?php
namespace VkSdk\Ads;

use lib\AutoFillObject;
use VkSdk\Ads\Includes\RejectReason;
use VkSdk\Includes\Request;

/**
 * Returns a reason of ad rejection for pre-moderation.
 * Class AdsGetRejectionReason
 *
 * @package VkSdk\Ads
 */
class AdsGetRejectionReason extends Request
{

    use AutoFillObject;

    /**
     * @var RejectReason
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id", "ad_id"]);

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
        return "ads.getRejectionReason";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Ads\Includes\RejectReason',
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
     * Ad ID.
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
}
