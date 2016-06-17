<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 14.06.16
 * Time: 23:15
 */

namespace VkSdk\Ads;


use VkSdk\Includes\Request;

class AdsImportTargetContacts extends Request
{
    /** @var  integer */
    private $response;

    /**
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;
        return $this;
    }

    public function setTargetGroupId($target_group_id)
    {
        $this->vkarg_target_group_id = $target_group_id;
        return $this;
    }

    /**
     * @param array $contacts
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->vkarg_contacts = implode(',', $contacts);
        return $this;
    }

    public function doRequest()
    {
        $this->setRequiredParams(['account_id', 'target_group_id', 'contacts']);

        $this->setMethod("ads.importTargetContacts");

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (isset($json->response)) {
            $this->response = $json->response;

            return true;
        }

        return false;
    }
}