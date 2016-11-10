<?php

namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Archives clients of an advertising agency.
 * Class AdsDeleteClients
 * @package VkSdk\Ads
 */
class AdsDeleteClients extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id", "ids"]);

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
        return "ads.deleteClients";
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
     * Serialized JSON array with IDs of deleted clients.
     *
     * @return $this
     *
     * @param string $ids
     */
    public function setIds($ids)
    {
        $this->vkarg_ids = $ids;

        return $this;
    }
}
