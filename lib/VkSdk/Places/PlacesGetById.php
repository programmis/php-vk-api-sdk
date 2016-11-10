<?php
namespace VkSdk\Places;

use VkSdk\Includes\Request;

/**
 * Returns information about locations by their IDs.
 * Class PlacesGetById
 *
 * @package VkSdk\Places
 */
class PlacesGetById extends Request
{

    /**
     * Location IDs.
     *
     * @return $this
     *
     * @param integer $place
     */
    public function addPlace($place)
    {
        $this->vkarg_places[] = $place;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["places"]);

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
        return "places.getById";
    }

    /**
     * Location IDs.
     *
     * @return $this
     *
     * @param array $places
     */
    public function setPlaces(array $places)
    {
        $this->vkarg_places = $places;

        return $this;
    }
}
