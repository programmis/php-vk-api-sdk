<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Secure
 *
 * @package VkApi\Methods
 */
class Secure
{
    use ApiTrait;

    /**
     * @return \VkSdk\Secure\SecureAddAppEvent
     */
    public function addAppEvent()
    {
        return new \VkSdk\Secure\SecureAddAppEvent($this->token);
    }

    /**
     * @return \VkSdk\Secure\SecureCheckToken
     */
    public function checkToken()
    {
        return new \VkSdk\Secure\SecureCheckToken($this->token);
    }

    /**
     * @return \VkSdk\Secure\SecureGetAppBalance
     */
    public function getAppBalance()
    {
        return new \VkSdk\Secure\SecureGetAppBalance($this->token);
    }

    /**
     * @return \VkSdk\Secure\SecureGetSMSHistory
     */
    public function getSMSHistory()
    {
        return new \VkSdk\Secure\SecureGetSMSHistory($this->token);
    }

    /**
     * @return \VkSdk\Secure\SecureGetTransactionsHistory
     */
    public function getTransactionsHistory()
    {
        return new \VkSdk\Secure\SecureGetTransactionsHistory($this->token);
    }

    /**
     * @return \VkSdk\Secure\SecureGetUserLevel
     */
    public function getUserLevel()
    {
        return new \VkSdk\Secure\SecureGetUserLevel($this->token);
    }

    /**
     * @return \VkSdk\Secure\SecureSendNotification
     */
    public function sendNotification()
    {
        return new \VkSdk\Secure\SecureSendNotification($this->token);
    }

    /**
     * @return \VkSdk\Secure\SecureSendSMSNotification
     */
    public function sendSMSNotification()
    {
        return new \VkSdk\Secure\SecureSendSMSNotification($this->token);
    }

    /**
     * @return \VkSdk\Secure\SecureSetCounter
     */
    public function setCounter()
    {
        return new \VkSdk\Secure\SecureSetCounter($this->token);
    }

    /**
     * @return \VkSdk\Secure\SecureSetUserLevel
     */
    public function setUserLevel()
    {
        return new \VkSdk\Secure\SecureSetUserLevel($this->token);
    }
}
