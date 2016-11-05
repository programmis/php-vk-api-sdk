<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 05.11.16
 * Time: 13:28
 */

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;

/**
 * партнер пользователя
 *
 * Class UserRelationPartner
 * @package VkSdk\Users\Includes
 */
class UserRelationPartner
{
    use AutoFillObject;

    /** @var int $id */
    private $id;
    /** @var string $first_name */
    private $first_name;
    /** @var string $last_name */
    private $last_name;

    /**
     * имя
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     *
     * @return UserRelationPartner
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * фамилия
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     *
     * @return UserRelationPartner
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * идентификатор
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return UserRelationPartner
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
