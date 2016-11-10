<?php
namespace VkSdk\Database;

use VkSdk\Includes\Request;

/**
 * Returns information about countries by their IDs.
 * Class DatabaseGetCountriesById
 *
 * @package VkSdk\Database
 */
class DatabaseGetCountriesById extends Request
{

    /**
     * Country IDs.
     *
     * @return $this
     *
     * @param integer $country_id
     */
    public function addCountryId($country_id)
    {
        $this->vkarg_country_ids[] = $country_id;

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
        return "database.getCountriesById";
    }

    /**
     * Country IDs.
     *
     * @return $this
     *
     * @param array $country_ids
     */
    public function setCountryIds(array $country_ids)
    {
        $this->vkarg_country_ids = $country_ids;

        return $this;
    }
}
