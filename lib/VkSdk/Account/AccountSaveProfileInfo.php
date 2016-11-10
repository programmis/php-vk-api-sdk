<?php

namespace VkSdk\Account;

use lib\AutoFillObject;
use VkSdk\Account\Includes\NameRequest;
use VkSdk\Includes\Request;

/**
 * Edits current profile info.
 * Class AccountSaveProfileInfo
 * @package VkSdk\Account
 */
class AccountSaveProfileInfo extends Request
{

    use AutoFillObject;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $changed;

    /**
     * @var NameRequest
     */
    private $name_request;

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
     * 1 if changes has been processed
     *
     * @return integer
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "account.saveProfileInfo";
    }

    /**
     * @return NameRequest
     */
    public function getNameRequest()
    {
        return $this->name_request;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'name_request' => 'VkSdk\Account\Includes\NameRequest',
        ];
    }

    /**
     * User birth date, format: DD.MM.YYYY.
     *
     * @return $this
     *
     * @param string $bdate
     */
    public function setBdate($bdate)
    {
        $this->vkarg_bdate = $bdate;

        return $this;
    }

    /**
     * Birth date visibility. Returned values: ; * '1' – show birth date;; * '2' – show only month and date;; * '0' – hide birth date.
     *
     * @return $this
     *
     * @param integer $bdate_visibility
     */
    public function setBdateVisibility($bdate_visibility)
    {
        $this->vkarg_bdate_visibility = $bdate_visibility;

        return $this;
    }

    /**
     * ID of the name change request to be canceled. If this paremeter is sent, all the others are ignored.
     *
     * @return $this
     *
     * @param integer $cancel_request_id
     */
    public function setCancelRequestId($cancel_request_id)
    {
        $this->vkarg_cancel_request_id = $cancel_request_id;

        return $this;
    }

    /**
     * User city.
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
     * User country.
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
     * User first name.
     *
     * @return $this
     *
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->vkarg_first_name = $first_name;

        return $this;
    }

    /**
     * User home town.
     *
     * @return $this
     *
     * @param string $home_town
     */
    public function setHomeTown($home_town)
    {
        $this->vkarg_home_town = $home_town;

        return $this;
    }

    /**
     * User last name.
     *
     * @return $this
     *
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->vkarg_last_name = $last_name;

        return $this;
    }

    /**
     * User maiden name (female only)
     *
     * @return $this
     *
     * @param string $maiden_name
     */
    public function setMaidenName($maiden_name)
    {
        $this->vkarg_maiden_name = $maiden_name;

        return $this;
    }

    /**
     * User relationship status. Possible values: ; * '1' – single;; * '2' – in a relationship;; * '3' – engaged;; * '4' – married;; * '5' – it's complicated;; * '6' – actively searching;; * '7' – in love;; * '0' – not specified.
     *
     * @return $this
     *
     * @param integer $relation
     */
    public function setRelation($relation)
    {
        $this->vkarg_relation = $relation;

        return $this;
    }

    /**
     * ID of the relationship partner.
     *
     * @return $this
     *
     * @param integer $relation_partner_id
     */
    public function setRelationPartnerId($relation_partner_id)
    {
        $this->vkarg_relation_partner_id = $relation_partner_id;

        return $this;
    }

    /**
     * User screen name.
     *
     * @return $this
     *
     * @param string $screen_name
     */
    public function setScreenName($screen_name)
    {
        $this->vkarg_screen_name = $screen_name;

        return $this;
    }

    /**
     * User sex. Possible values: ; * '1' – female;; * '2' – male.
     *
     * @return $this
     *
     * @param integer $sex
     */
    public function setSex($sex)
    {
        $this->vkarg_sex = $sex;

        return $this;
    }

    /**
     * Status text.
     *
     * @return $this
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->vkarg_status = $status;

        return $this;
    }
}
