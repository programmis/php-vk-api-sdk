<?php

namespace VkSdk\Database;

use VkSdk\Includes\Request;

/**
 * Returns a list of school classes specified for the country.
 * Class DatabaseGetSchoolClasses
 * @package VkSdk\Database
 */
class DatabaseGetSchoolClasses extends Request
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
        return "database.getSchoolClasses";
    }

    /**
     * Country ID.
     *
     * @return $this
     *
     * @param integer $country_id
     */
    public function setCountryId($country_id)
    {
        $this->vkarg_country_id = $country_id;

        return $this;
    }
}
