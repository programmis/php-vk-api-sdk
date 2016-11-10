<?php
namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Returns a list of the current user's friends whose phone numbers, validated or specified in a profile, are in a given list.
 * Class FriendsGetByPhones
 *
 * @package VkSdk\Friends
 */
class FriendsGetByPhones extends Request
{

    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online, counters'.;
     * see FieldsValues::FIELD_* constants
     *
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->vkarg_fields[] = $field;

        return $this;
    }

    /**
     * List of phone numbers in MSISDN format (maximum 1000).; Example:; "+79219876543,+79111234567"
     *
     * @return $this
     *
     * @param string $phone
     */
    public function addPhone($phone)
    {
        $this->vkarg_phones[] = $phone;

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
        return "friends.getByPhones";
    }

    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online, counters'.;
     * see FieldsValues::FIELD_* constants
     *
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->vkarg_fields = $fields;

        return $this;
    }

    /**
     * List of phone numbers in MSISDN format (maximum 1000).; Example:; "+79219876543,+79111234567"
     *
     * @return $this
     *
     * @param array $phones
     */
    public function setPhones(array $phones)
    {
        $this->vkarg_phones = $phones;

        return $this;
    }
}
