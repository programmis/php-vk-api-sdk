<?php

namespace VkSdk\Account;

use VkSdk\Includes\Request;

/**
 * Marks the current user as online for 15 minutes.
 * Class AccountSetOnline
 * @package VkSdk\Account
 */
class AccountSetOnline extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
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
        return "account.setOnline";
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
     * '1' if videocalls are available for current device.
     *
     * @return $this
     *
     * @param boolean $voip
     */
    public function setVoip($voip)
    {
        $this->vkarg_voip = $voip;

        return $this;
    }
}
