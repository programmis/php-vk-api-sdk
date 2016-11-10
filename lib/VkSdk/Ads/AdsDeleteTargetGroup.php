<?php
namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Deletes a retarget group.
 * Class AdsDeleteTargetGroup
 *
 * @package VkSdk\Ads
 */
class AdsDeleteTargetGroup extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id", "target_group_id"]);

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
        return "ads.deleteTargetGroup";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
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
     * 'Only for advertising agencies.' ; ID of the client with the advertising account where the group will be created.;
     *
     * @return $this
     *
     * @param integer $client_id
     */
    public function setClientId($client_id)
    {
        $this->vkarg_client_id = $client_id;

        return $this;
    }

    /**
     * Group ID.
     *
     * @return $this
     *
     * @param integer $target_group_id
     */
    public function setTargetGroupId($target_group_id)
    {
        $this->vkarg_target_group_id = $target_group_id;

        return $this;
    }
}
