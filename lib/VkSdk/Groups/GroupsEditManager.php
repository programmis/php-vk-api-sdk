<?php
namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Allows to add, remove or edit the community manager .
 * Class GroupsEditManager
 *
 * @package VkSdk\Groups
 */
class GroupsEditManager extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id", "user_id"]);

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
        return "groups.editManager";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Contact e-mail.
     *
     * @return $this
     *
     * @param string $contact_email
     */
    public function setContactEmail($contact_email)
    {
        $this->vkarg_contact_email = $contact_email;

        return $this;
    }

    /**
     * Contact phone.
     *
     * @return $this
     *
     * @param string $contact_phone
     */
    public function setContactPhone($contact_phone)
    {
        $this->vkarg_contact_phone = $contact_phone;

        return $this;
    }

    /**
     * Position to show in Contacts block.
     *
     * @return $this
     *
     * @param string $contact_position
     */
    public function setContactPosition($contact_position)
    {
        $this->vkarg_contact_position = $contact_position;

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
     * '1' — to show the manager in Contacts block of the community.
     *
     * @return $this
     *
     * @param boolean $is_contact
     */
    public function setIsContact($is_contact)
    {
        $this->vkarg_is_contact = $is_contact;

        return $this;
    }

    /**
     * Manager role. Possible values:; *'moderator';; *'editor';; *'administrator'.
     *
     * @return $this
     *
     * @param string $role
     */
    public function setRole($role)
    {
        $this->vkarg_role = $role;

        return $this;
    }

    /**
     * User ID.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
