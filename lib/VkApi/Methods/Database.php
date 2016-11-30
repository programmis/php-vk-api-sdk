<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Database
 *
 * @package VkApi\Methods
 */
class Database
{
    use ApiTrait;

    /**
     * @return \VkSdk\Database\DatabaseGetChairs
     */
    public function getChairs()
    {
        return new \VkSdk\Database\DatabaseGetChairs($this->token);
    }

    /**
     * @return \VkSdk\Database\DatabaseGetCities
     */
    public function getCities()
    {
        return new \VkSdk\Database\DatabaseGetCities($this->token);
    }

    /**
     * @return \VkSdk\Database\DatabaseGetCitiesById
     */
    public function getCitiesById()
    {
        return new \VkSdk\Database\DatabaseGetCitiesById($this->token);
    }

    /**
     * @return \VkSdk\Database\DatabaseGetCountries
     */
    public function getCountries()
    {
        return new \VkSdk\Database\DatabaseGetCountries($this->token);
    }

    /**
     * @return \VkSdk\Database\DatabaseGetCountriesById
     */
    public function getCountriesById()
    {
        return new \VkSdk\Database\DatabaseGetCountriesById($this->token);
    }

    /**
     * @return \VkSdk\Database\DatabaseGetFaculties
     */
    public function getFaculties()
    {
        return new \VkSdk\Database\DatabaseGetFaculties($this->token);
    }

    /**
     * @return \VkSdk\Database\DatabaseGetRegions
     */
    public function getRegions()
    {
        return new \VkSdk\Database\DatabaseGetRegions($this->token);
    }

    /**
     * @return \VkSdk\Database\DatabaseGetSchoolClasses
     */
    public function getSchoolClasses()
    {
        return new \VkSdk\Database\DatabaseGetSchoolClasses($this->token);
    }

    /**
     * @return \VkSdk\Database\DatabaseGetSchools
     */
    public function getSchools()
    {
        return new \VkSdk\Database\DatabaseGetSchools($this->token);
    }

    /**
     * @return \VkSdk\Database\DatabaseGetStreetsById
     */
    public function getStreetsById()
    {
        return new \VkSdk\Database\DatabaseGetStreetsById($this->token);
    }

    /**
     * @return \VkSdk\Database\DatabaseGetUniversities
     */
    public function getUniversities()
    {
        return new \VkSdk\Database\DatabaseGetUniversities($this->token);
    }
}
