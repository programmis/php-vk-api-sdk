<?php
namespace VkSdk\Secure;

use VkSdk\Includes\Request;

/**
 * Shows history of votes transaction between users and the application.
 * Class SecureGetTransactionsHistory
 *
 * @package VkSdk\Secure
 */
class SecureGetTransactionsHistory extends Request
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
        return "secure.getTransactionsHistory";
    }
}
