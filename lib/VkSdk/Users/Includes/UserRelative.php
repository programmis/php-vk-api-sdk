<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 05.11.16
 * Time: 13:02
 */

namespace VkSdk\Users\Includes;

/**
 * родственник текущего пользователя
 *
 * Class UserRelative
 * @package VkSdk\Users\Includes
 */
class UserRelative
{
    const TYPE_CHILD = 'child';
    const TYPE_SIBLING = 'sibling';
    const TYPE_PARENT = 'parent';
    const TYPE_GRANDPARENT = 'grandparent';
    const TYPE_GRANDCHILD = 'grandchild';

    /** @var int $id */
    private $id;
    /** @var string $name */
    private $name;
    /** @var string $type */
    private $type;

    /**
     * идентификатор пользователя;
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
     * @return UserRelative
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * имя родственника (в том случае, если родственник не
     * является пользователем ВКонтакте,
     * в этом случае id не возвращается);
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
     * @return UserRelative
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     *  тип родственной связи
     * см. TYPE_* константы
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
     * @return UserRelative
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
