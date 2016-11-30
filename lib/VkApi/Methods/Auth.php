<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Auth
 *
 * @package VkApi\Methods
 */
class Auth
{
    use ApiTrait;

    /**
     * @return \VkSdk\Auth\AuthCheckPhone
     */
    public function checkPhone()
    {
        return new \VkSdk\Auth\AuthCheckPhone($this->token);
    }

    /**
     * @return \VkSdk\Auth\AuthConfirm
     */
    public function confirm()
    {
        return new \VkSdk\Auth\AuthConfirm($this->token);
    }

    /**
     * @return \VkSdk\Auth\AuthRestore
     */
    public function restore()
    {
        return new \VkSdk\Auth\AuthRestore($this->token);
    }

    /**
     * @return \VkSdk\Auth\AuthSignup
     */
    public function signup()
    {
        return new \VkSdk\Auth\AuthSignup($this->token);
    }
}
