<?php
namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Removes managers and/or supervisors from advertising account.
 * Class AdsRemoveOfficeUsers
 *
 * @package VkSdk\Ads
 */
class AdsRemoveOfficeUsers extends Request
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
        return "ads.removeOfficeUsers";
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
     * Serialized JSON array with IDs of deleted managers.
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
