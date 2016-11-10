<?php

namespace VkSdk\Groups\Includes;

use lib\AutoFillObject;

/**
 * Class ContactsItem
 * @package VkSdk\Groups\Includes
 */
class ContactsItem
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $desc;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * Contact description
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @return $this
     *
     * @param string $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Contact email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return $this
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Contact phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return $this
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * User ID
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }
}
