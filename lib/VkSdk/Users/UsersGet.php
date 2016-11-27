<?php

namespace VkSdk\Users;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserFull;

/**
 * Returns detailed information on users.
 * Class UsersGet
 * @package VkSdk\Users
 */
class UsersGet extends Request
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

    /** @var array $fields */
    private $fields;
    /** @var array $user_ids */
    private $user_ids;

    /** @var UserFull[] $response */
    private $response = [];

    /**
     * @return UserFull[]
     */
    public function getUsersInfo(): array
    {
        return $this->response;
    }

    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city',
     * 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'contacts', 'education', 'online',
     * 'counters', 'relation', 'last_seen', 'activity', 'can_write_private_message', 'can_see_all_posts', 'can_post',
     * 'universities'; see FieldsValues::FIELD_* constants
     *
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->fields[] = $field;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => [
                'class'  => 'VkSdk\Users\Includes\UserFull',
                'method' => 'addUserInfo'
            ]
        ];
    }

    /**
     * @return $this
     *
     * @param UserFull $userInfo
     */
    protected function addUserInfo(UserFull $userInfo)
    {
        $this->response[] = $userInfo;

        return $this;
    }

    /**
     * User IDs or screen names ('screen_name'). By default, current user ID.
     *
     * @return $this
     *
     * @param string $user_id
     */
    public function addUserId($user_id)
    {
        $this->user_ids[] = $user_id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setParameter('fields', $this->fields);
        $this->setParameter('user_ids', $this->user_ids);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->fillByJson($json);

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
        return "users.get";
    }

    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city',
     * 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'contacts', 'education', 'online',
     * 'counters', 'relation', 'last_seen', 'activity', 'can_write_private_message', 'can_see_all_posts', 'can_post',
     * 'universities'; see FieldsValues::FIELD_* constants
     *
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Case for declension of user name and surname:; 'nom' — nominative (default); 'gen' — genitive ; 'dat' — dative;
     * 'acc' — accusative ; 'ins' — instrumental ; 'abl' — prepositional see self::NAME_CASE_* constants
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

    /**
     * User IDs or screen names ('screen_name'). By default, current user ID.
     *
     * @return $this
     *
     * @param array $user_ids
     */
    public function setUserIds(array $user_ids)
    {
        $this->user_ids = $user_ids;

        return $this;
    }
}
