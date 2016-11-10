<?php
namespace VkSdk\Ads;

use lib\AutoFillObject;
use VkSdk\Ads\Includes\FloodStats;
use VkSdk\Includes\Request;

/**
 * Returns information about current state of a counter — number of remaining runs of methods and time to the next counter nulling in seconds.
 * Class AdsGetFloodStats
 *
 * @package VkSdk\Ads
 */
class AdsGetFloodStats extends Request
{

    use AutoFillObject;

    /**
     * @var FloodStats
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id"]);

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
        return "ads.getFloodStats";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Ads\Includes\FloodStats',
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
}
