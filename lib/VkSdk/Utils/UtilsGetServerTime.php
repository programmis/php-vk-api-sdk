<?php

namespace VkSdk\Utils;

use VkSdk\Includes\Request;

/**
 * Returns the current time of the VK server.
 * Class UtilsGetServerTime
 * @package VkSdk\Utils
 */
class UtilsGetServerTime extends Request
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
        return "utils.getServerTime";
    }
}
