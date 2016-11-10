<?php
namespace VkSdk\Account\Includes;

use lib\AutoFillObject;
use VkSdk\Base\Country;
use VkSdk\Base\Objects;
use VkSdk\Users\Includes\UserMin;

/**
 * Class UserSettings
 *
 * @package VkSdk\Account\Includes
 */
class UserSettings
{

    use AutoFillObject;

    /**
     * @var string
     */
    public $bdate;

    /**
     * @var integer
     */
    public $bdate_visibility;

    /**
     * @var Objects
     */
    public $city;

    /**
     * @var Country
     */
    public $country;

    /**
     * @var string
     */
    public $first_name;

    /**
     * @var string
     */
    public $home_town;

    /**
     * @var string
     */
    public $last_name;

    /**
     * @var string
     */
    public $maiden_name;

    /**
     * @var NameRequest
     */
    public $name_request;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var integer
     */
    public $relation;

    /**
     * @var UserMin
     */
    public $relation_partner;

    /**
     * @var integer
     */
    public $relation_pending;

    /**
     * @var UserMin[]
     */
    public $relation_requests;

    /**
     * @var string
     */
    public $screen_name;

    /**
     * @var integer
     */
    public $sex;

    /**
     * @var string
     */
    public $status;

    /**
     * @return $this
     *
     * @param UserMin $relation_request
     */
    public function addRelationRequest(UserMin $relation_request)
    {
        $this->relation_requests[] = $relation_request;

        return $this;
    }

    /**
     * User's date of birth
     *
     * @return string
     */
    public function getBdate()
    {
        return $this->bdate;
    }

    /**
     * @return $this
     *
     * @param string $bdate
     */
    public function setBdate($bdate)
    {
        $this->bdate = $bdate;

        return $this;
    }

    /**
     * Information whether user's birthdate are hidden
     *
     * @return integer
     */
    public function getBdateVisibility()
    {
        return $this->bdate_visibility;
    }

    /**
     * @return $this
     *
     * @param integer $bdate_visibility
     */
    public function setBdateVisibility($bdate_visibility)
    {
        $this->bdate_visibility = $bdate_visibility;

        return $this;
    }

    /**
     * @return Objects
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return $this
     *
     * @param Objects $city
     */
    public function setCity(Objects $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return $this
     *
     * @param Country $country
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * User first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return $this
     *
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * User's hometown
     *
     * @return string
     */
    public function getHomeTown()
    {
        return $this->home_town;
    }

    /**
     * @return $this
     *
     * @param string $home_town
     */
    public function setHomeTown($home_town)
    {
        $this->home_town = $home_town;

        return $this;
    }

    /**
     * User last name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return $this
     *
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * User maiden name
     *
     * @return string
     */
    public function getMaidenName()
    {
        return $this->maiden_name;
    }

    /**
     * @return $this
     *
     * @param string $maiden_name
     */
    public function setMaidenName($maiden_name)
    {
        $this->maiden_name = $maiden_name;

        return $this;
    }

    /**
     * @return NameRequest
     */
    public function getNameRequest()
    {
        return $this->name_request;
    }

    /**
     * @return $this
     *
     * @param NameRequest $name_request
     */
    public function setNameRequest(NameRequest $name_request)
    {
        $this->name_request = $name_request;

        return $this;
    }

    /**
     * User phone number with some hidden digits
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return $this
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * User relationship status
     *
     * @return integer
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * @return $this
     *
     * @param integer $relation
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * @return UserMin
     */
    public function getRelationPartner()
    {
        return $this->relation_partner;
    }

    /**
     * @return $this
     *
     * @param UserMin $relation_partner
     */
    public function setRelationPartner(UserMin $relation_partner)
    {
        $this->relation_partner = $relation_partner;

        return $this;
    }

    /**
     * Information whether relation status is pending
     *
     * @return integer
     */
    public function getRelationPending()
    {
        return $this->relation_pending;
    }

    /**
     * @return $this
     *
     * @param integer $relation_pending
     */
    public function setRelationPending($relation_pending)
    {
        $this->relation_pending = $relation_pending;

        return $this;
    }

    /**
     * @return UserMin[]
     */
    public function getRelationRequests()
    {
        return $this->relation_requests;
    }

    /**
     * @return $this
     *
     * @param array $relation_requests
     */
    public function setRelationRequests(array $relation_requests)
    {
        $this->relation_requests = $relation_requests;

        return $this;
    }

    /**
     * Domain name of the user's page
     *
     * @return string
     */
    public function getScreenName()
    {
        return $this->screen_name;
    }

    /**
     * @return $this
     *
     * @param string $screen_name
     */
    public function setScreenName($screen_name)
    {
        $this->screen_name = $screen_name;

        return $this;
    }

    /**
     * User sex
     *
     * @return integer
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return $this
     *
     * @param integer $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * User status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return $this
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'relation_partner'  => 'VkSdk\Users\Includes\UserMin',
            'relation_requests' => [
                'class'  => 'VkSdk\Users\Includes\UserMin',
                'method' => 'addRelationRequest'
            ],
            'country'           => 'VkSdk\Base\Country',
            'city'              => 'VkSdk\Base\Objects',
            'name_request'      => 'VkSdk\Account\Includes\NameRequest',
        ];
    }
}
