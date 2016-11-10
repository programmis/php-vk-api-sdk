<?php
namespace VkSdk\Database;

use VkSdk\Includes\Request;

/**
 * Returns information about cities by their IDs.
 * Class DatabaseGetCitiesById
 *
 * @package VkSdk\Database
 */
class DatabaseGetCitiesById extends Request
{

    /**
     * City IDs.
     *
     * @return $this
     *
     * @param integer $city_id
     */
    public function addCityId($city_id)
    {
        $this->vkarg_city_ids[] = $city_id;

        return $this;
    }

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
        return "database.getCitiesById";
    }

    /**
     * City IDs.
     *
     * @return $this
     *
     * @param array $city_ids
     */
    public function setCityIds(array $city_ids)
    {
        $this->vkarg_city_ids = $city_ids;

        return $this;
    }
}
