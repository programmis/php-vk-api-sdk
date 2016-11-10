<?php
namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Imports a list of advertiser's contacts to count VK registered users against the target group.
 * Class AdsImportTargetContacts
 *
 * @package VkSdk\Ads
 */
class AdsImportTargetContacts extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id", "target_group_id", "contacts"]);

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
        return "ads.importTargetContacts";
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
     * List of phone numbers, emails or user IDs separated with a comma.
     *
     * @return $this
     *
     * @param string $contacts
     */
    public function setContacts($contacts)
    {
        $this->vkarg_contacts = $contacts;

        return $this;
    }

    /**
     * Target group ID.
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
