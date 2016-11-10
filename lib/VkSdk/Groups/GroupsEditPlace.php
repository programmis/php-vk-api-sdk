<?php
namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Edits the place in community.
 * Class GroupsEditPlace
 *
 * @package VkSdk\Groups
 */
class GroupsEditPlace extends Request
{

    /**
     * @var string
     */
    public $address;

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $success;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * Place address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Place address.
     *
     * @return $this
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->vkarg_address = $address;

        return $this;
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
        return "groups.editPlace";
    }

    /**
     * @return integer
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * City ID.
     *
     * @return $this
     *
     * @param integer $city_id
     */
    public function setCityId($city_id)
    {
        $this->vkarg_city_id = $city_id;

        return $this;
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

    /**
     * Community ID.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * Geographical latitude.
     *
     * @return $this
     *
     * @param number $latitude
     */
    public function setLatitude(number $latitude)
    {
        $this->vkarg_latitude = $latitude;

        return $this;
    }

    /**
     * Geographical longitude.
     *
     * @return $this
     *
     * @param number $longitude
     */
    public function setLongitude(number $longitude)
    {
        $this->vkarg_longitude = $longitude;

        return $this;
    }

    /**
     * Place title.
     *
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->vkarg_title = $title;

        return $this;
    }
}
