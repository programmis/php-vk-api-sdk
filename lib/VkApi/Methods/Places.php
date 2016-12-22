<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Places
 *
 * @package VkApi\Methods
 */
class Places
{
    use ApiTrait;

    /**
     * @return \VkSdk\Places\PlacesAdd
     */
    public function add()
    {
        return new \VkSdk\Places\PlacesAdd($this->token);
    }

    /**
     * @return \VkSdk\Places\PlacesCheckin
     */
    public function checkin()
    {
        return new \VkSdk\Places\PlacesCheckin($this->token);
    }

    /**
     * @return \VkSdk\Places\PlacesGetById
     */
    public function getById()
    {
        return new \VkSdk\Places\PlacesGetById($this->token);
    }

    /**
     * @return \VkSdk\Places\PlacesGetCheckins
     */
    public function getCheckins()
    {
        return new \VkSdk\Places\PlacesGetCheckins($this->token);
    }

    /**
     * @return \VkSdk\Places\PlacesGetTypes
     */
    public function getTypes()
    {
        return new \VkSdk\Places\PlacesGetTypes($this->token);
    }

    /**
     * @return \VkSdk\Places\PlacesSearch
     */
    public function search()
    {
        return new \VkSdk\Places\PlacesSearch($this->token);
    }
}
