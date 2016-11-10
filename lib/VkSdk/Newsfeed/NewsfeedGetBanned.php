<?php
namespace VkSdk\Newsfeed;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserFull;

/**
 * Returns a list of users and communities banned from the current user's newsfeed.
 * Class NewsfeedGetBanned
 *
 * @package VkSdk\Newsfeed
 */
class NewsfeedGetBanned extends Request
{

    use AutoFillObject;

    /**
     * 'abl' — prepositional
     */
    const NAME_CASE_ABL = 'abl';

    /**
     * 'acc' — accusative
     */
    const NAME_CASE_ACC = 'acc';

    /**
     * 'dat' — dative
     */
    const NAME_CASE_DAT = 'dat';

    /**
     * 'gen' — genitive
     */
    const NAME_CASE_GEN = 'gen';

    /**
     * 'ins' — instrumental
     */
    const NAME_CASE_INS = 'ins';

    /**
     * 'nom' — nominative (default)
     */
    const NAME_CASE_NOM = 'nom';

    /**
     * @var UserFull[]
     */
    public $groups;

    /**
     * @var GroupFull[]
     */
    public $members;

    /**
     * Profile fields to return.; ;
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
     * @return $this
     *
     * @param UserFull $group
     */
    public function addGroup(UserFull $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * @return $this
     *
     * @param GroupFull $member
     */
    public function addMember(GroupFull $member)
    {
        $this->members[] = $member;

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
     * @return UserFull[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return GroupFull[]
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "newsfeed.getBanned";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'groups'  => [
                'class'  => 'VkSdk\Users\Includes\UserFull',
                'method' => 'addGroup'
            ],
            'members' => [
                'class'  => 'VkSdk\Groups\Includes\GroupFull',
                'method' => 'addMember'
            ],
        ];
    }

    /**
     * '1' — return extra information about users and communities
     *
     * @return $this
     *
     * @param boolean $extended
     */
    public function setExtended($extended)
    {
        $this->vkarg_extended = $extended;

        return $this;
    }

    /**
     * Profile fields to return.; ;
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
     * Case for declension of user name and surname:; 'nom' — nominative (default); 'gen' — genitive ; 'dat' — dative; 'acc' — accusative ; 'ins' — instrumental ; 'abl' — prepositional
     * see self::NAME_CASE_* constants
     *
     * @return $this
     *
     * @param string $name_case
     */
    public function setNameCase($name_case)
    {
        $this->vkarg_name_case = $name_case;

        return $this;
    }
}
