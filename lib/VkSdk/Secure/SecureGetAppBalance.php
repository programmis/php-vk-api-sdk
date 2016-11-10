<?php

namespace VkSdk\Secure;

use VkSdk\Includes\Request;

/**
 * Returns payment balance of the application in hundredth of a vote.
 * Class SecureGetAppBalance
 * @package VkSdk\Secure
 */
class SecureGetAppBalance extends Request
{

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
        return "secure.getAppBalance";
    }
}
