<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 04.11.16
 * Time: 0:01
 */

namespace VkSdk\Users\Includes;

/**
 * информация о телефонных номерах пользователя.
 *
 * Class UserContacts
 * @package VkSdk\Users\Includes
 */
class UserContacts
{
    /** @var string $mobile_phone */
    private $mobile_phone;
    /** @var string $home_phone */
    private $home_phone;

    /**
     * дополнительный номер телефона пользователя.
     *
     * @return string
     */
    public function getHomePhone()
    {
        return $this->home_phone;
    }

    /**
     * @param string $home_phone
     *
     * @return UserContacts
     */
    public function setHomePhone($home_phone)
    {
        $this->home_phone = $home_phone;

        return $this;
    }

    /**
     * номер мобильного телефона пользователя
     * (только для Standalone-приложений);
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobile_phone;
    }

    /**
     * @param string $mobile_phone
     *
     * @return UserContacts
     */
    public function setMobilePhone($mobile_phone)
    {
        $this->mobile_phone = $mobile_phone;

        return $this;
    }
}
