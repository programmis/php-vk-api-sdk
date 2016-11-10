<?php

namespace VkSdk\Places;

use VkSdk\Includes\Request;

/**
 * Returns a list of all types of locations.
 * Class PlacesGetTypes
 * @package VkSdk\Places
 */
class PlacesGetTypes extends Request
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
        return "places.getTypes";
    }
}
