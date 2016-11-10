<?php
namespace VkSdk\Database;

use VkSdk\Includes\Request;

/**
 * Returns information about streets by their IDs.
 * Class DatabaseGetStreetsById
 *
 * @package VkSdk\Database
 */
class DatabaseGetStreetsById extends Request
{

    /**
     * Street IDs.
     *
     * @return $this
     *
     * @param integer $street_id
     */
    public function addStreetId($street_id)
    {
        $this->vkarg_street_ids[] = $street_id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["street_ids"]);

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
        return "database.getStreetsById";
    }

    /**
     * Street IDs.
     *
     * @return $this
     *
     * @param array $street_ids
     */
    public function setStreetIds(array $street_ids)
    {
        $this->vkarg_street_ids = $street_ids;

        return $this;
    }
}
