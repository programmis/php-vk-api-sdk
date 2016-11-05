<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 05.11.16
 * Time: 13:28
 */

namespace VkSdk\Users\Includes;

/**
 * партнер пользователя
 *
 * Class UserRelationPartner
 * @package VkSdk\Users\Includes
 */
class UserRelationPartner
{
    /** @var int $id */
    private $id;
    /** @var string $name */
    private $name;

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

    /**
     * имя
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return UserRelationPartner
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
