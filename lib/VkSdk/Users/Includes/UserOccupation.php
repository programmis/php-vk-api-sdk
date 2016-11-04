<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 04.11.16
 * Time: 22:18
 */

namespace VkSdk\Users\Includes;

/**
 * информация о текущем роде занятия пользователя.
 *
 * Class UserOccupation
 * @package VkSdk\Users\Includes
 */
class UserOccupation
{
    /** работа; */
    const TYPE_WORK = 'work';
    /** среднее образование; */
    const TYPE_SCHOOL = 'school';
    /** высшее образование. */
    const TYPE_UNIVERSITY = 'university';

    /** @var string $type */
    private $type;
    /** @var int $id */
    private $id;
    /** @var string $name */
    private $name;

    /**
     * тип. см. TYPE_* константы
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return UserOccupation
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * идентификатор школы, вуза, сообщества компании
     * (в которой пользователь работает);
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
     * @return UserOccupation
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * название школы, вуза или места работы;
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
     * @return UserOccupation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
