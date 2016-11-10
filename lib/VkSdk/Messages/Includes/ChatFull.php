<?php
namespace VkSdk\Messages\Includes;

use lib\AutoFillObject;

/**
 * Class ChatFull
 *
 * @package VkSdk\Messages\Includes
 */
class ChatFull
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $admin_id;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $photo_100;

    /**
     * @var string
     */
    public $photo_200;

    /**
     * @var string
     */
    public $photo_50;

    /**
     * @var ChatPushSettings
     */
    public $push_settings;

    /**
     * @var string
     */
    public $type;

    /**
     * @var UserXtrInvitedBy[]
     */
    public $users;

    /**
     * @return $this
     *
     * @param UserXtrInvitedBy $user
     */
    public function addUser(UserXtrInvitedBy $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Chat creator ID
     *
     * @return integer
     */
    public function getAdminId()
    {
        return $this->admin_id;
    }

    /**
     * @return $this
     *
     * @param integer $admin_id
     */
    public function setAdminId($admin_id)
    {
        $this->admin_id = $admin_id;

        return $this;
    }

    /**
     * Chat ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * URL of the preview image with 100 px in width
     *
     * @return string
     */
    public function getPhoto100()
    {
        return $this->photo_100;
    }

    /**
     * @return $this
     *
     * @param string $photo_100
     */
    public function setPhoto100($photo_100)
    {
        $this->photo_100 = $photo_100;

        return $this;
    }

    /**
     * URL of the preview image with 200 px in width
     *
     * @return string
     */
    public function getPhoto200()
    {
        return $this->photo_200;
    }

    /**
     * @return $this
     *
     * @param string $photo_200
     */
    public function setPhoto200($photo_200)
    {
        $this->photo_200 = $photo_200;

        return $this;
    }

    /**
     * URL of the preview image with 50 px in width
     *
     * @return string
     */
    public function getPhoto50()
    {
        return $this->photo_50;
    }

    /**
     * @return $this
     *
     * @param string $photo_50
     */
    public function setPhoto50($photo_50)
    {
        $this->photo_50 = $photo_50;

        return $this;
    }

    /**
     * @return ChatPushSettings
     */
    public function getPushSettings()
    {
        return $this->push_settings;
    }

    /**
     * @return $this
     *
     * @param ChatPushSettings $push_settings
     */
    public function setPushSettings(ChatPushSettings $push_settings)
    {
        $this->push_settings = $push_settings;

        return $this;
    }

    /**
     * Chat type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return UserXtrInvitedBy[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @return $this
     *
     * @param array $users
     */
    public function setUsers(array $users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'users'         => [
                'class'  => 'VkSdk\Messages\Includes\UserXtrInvitedBy',
                'method' => 'addUser'
            ],
            'push_settings' => 'VkSdk\Messages\Includes\ChatPushSettings',
        ];
    }
}
