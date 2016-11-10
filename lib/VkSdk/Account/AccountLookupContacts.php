<?php

namespace VkSdk\Account;

use lib\AutoFillObject;
use VkSdk\Account\Includes\LookupResult;
use VkSdk\Includes\Request;

/**
 * Allows to search the VK users using phone numbers, e-mail addresses and user IDs on other services.
 * Class AccountLookupContacts
 * @package VkSdk\Account
 */
class AccountLookupContacts extends Request
{

    use AutoFillObject;

    /**
     * @var LookupResult
     */
    private $response;

    /**
     * List of contacts separated with commas
     *
     * @return $this
     *
     * @param string $contact
     */
    public function addContact($contact)
    {
        $this->vkarg_contacts[] = $contact;

        return $this;
    }

    /**
     * Profile fields to return. Possible values: 'nickname, domain, sex, bdate, city, country, timezone, photo_50, photo_100, photo_200_orig, has_mobile, contacts, education, online, relation, last_seen, status, can_write_private_message, can_see_all_posts, can_post, universities'.
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
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["service"]);

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
        return "account.lookupContacts";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Account\Includes\LookupResult',
        ];
    }

    /**
     * List of contacts separated with commas
     *
     * @return $this
     *
     * @param array $contacts
     */
    public function setContacts(array $contacts)
    {
        $this->vkarg_contacts = $contacts;

        return $this;
    }

    /**
     * Profile fields to return. Possible values: 'nickname, domain, sex, bdate, city, country, timezone, photo_50, photo_100, photo_200_orig, has_mobile, contacts, education, online, relation, last_seen, status, can_write_private_message, can_see_all_posts, can_post, universities'.
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
     * Contact of a current user on a specified service
     *
     * @return $this
     *
     * @param string $mycontact
     */
    public function setMycontact($mycontact)
    {
        $this->vkarg_mycontact = $mycontact;

        return $this;
    }

    /**
     * '1' – also return contacts found using this service before, '0' – return only contacts found using 'contacts' field.
     *
     * @return $this
     *
     * @param boolean $return_all
     */
    public function setReturnAll($return_all)
    {
        $this->vkarg_return_all = $return_all;

        return $this;
    }

    /**
     * String identifier of a service which contacts are used for searching. Possible values: ; * email; * phone; * twitter; * facebook; * odnoklassniki; * instagram; * google
     *
     * @return $this
     *
     * @param string $service
     */
    public function setService($service)
    {
        $this->vkarg_service = $service;

        return $this;
    }
}
