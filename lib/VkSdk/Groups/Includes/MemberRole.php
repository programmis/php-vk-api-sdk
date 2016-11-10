<?php
namespace VkSdk\Groups\Includes;

/**
 * Class MemberRole
 *
 * @package VkSdk\Groups\Includes
 */
class MemberRole
{

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $role;

    /**
     * User ID
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
     * User's credentials as community admin
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return $this
     *
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}
