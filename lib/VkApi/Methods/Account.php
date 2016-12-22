<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Account
 *
 * @package VkApi\Methods
 */
class Account
{
    use ApiTrait;

    /**
     * @return \VkSdk\Account\AccountBanUser
     */
    public function banUser()
    {
        return new \VkSdk\Account\AccountBanUser($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountChangePassword
     */
    public function changePassword()
    {
        return new \VkSdk\Account\AccountChangePassword($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountGetActiveOffers
     */
    public function getActiveOffers()
    {
        return new \VkSdk\Account\AccountGetActiveOffers($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountGetAppPermissions
     */
    public function getAppPermissions()
    {
        return new \VkSdk\Account\AccountGetAppPermissions($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountGetBanned
     */
    public function getBanned()
    {
        return new \VkSdk\Account\AccountGetBanned($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountGetCounters
     */
    public function getCounters()
    {
        return new \VkSdk\Account\AccountGetCounters($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountGetInfo
     */
    public function getInfo()
    {
        return new \VkSdk\Account\AccountGetInfo($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountGetProfileInfo
     */
    public function getProfileInfo()
    {
        return new \VkSdk\Account\AccountGetProfileInfo($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountGetPushSettings
     */
    public function getPushSettings()
    {
        return new \VkSdk\Account\AccountGetPushSettings($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountLookupContacts
     */
    public function lookupContacts()
    {
        return new \VkSdk\Account\AccountLookupContacts($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountRegisterDevice
     */
    public function registerDevice()
    {
        return new \VkSdk\Account\AccountRegisterDevice($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountSaveProfileInfo
     */
    public function saveProfileInfo()
    {
        return new \VkSdk\Account\AccountSaveProfileInfo($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountSetInfo
     */
    public function setInfo()
    {
        return new \VkSdk\Account\AccountSetInfo($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountSetNameInMenu
     */
    public function setNameInMenu()
    {
        return new \VkSdk\Account\AccountSetNameInMenu($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountSetOffline
     */
    public function setOffline()
    {
        return new \VkSdk\Account\AccountSetOffline($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountSetOnline
     */
    public function setOnline()
    {
        return new \VkSdk\Account\AccountSetOnline($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountSetPushSettings
     */
    public function setPushSettings()
    {
        return new \VkSdk\Account\AccountSetPushSettings($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountSetSilenceMode
     */
    public function setSilenceMode()
    {
        return new \VkSdk\Account\AccountSetSilenceMode($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountUnbanUser
     */
    public function unbanUser()
    {
        return new \VkSdk\Account\AccountUnbanUser($this->token);
    }

    /**
     * @return \VkSdk\Account\AccountUnregisterDevice
     */
    public function unregisterDevice()
    {
        return new \VkSdk\Account\AccountUnregisterDevice($this->token);
    }
}
