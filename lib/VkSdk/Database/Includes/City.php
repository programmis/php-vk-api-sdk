<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 03.11.16
 * Time: 23:55
 */

namespace VkSdk\Database\Includes;

use lib\AutoFillObject;

/**
 * информация о городе
 *
 * Class City
 * @package VkSdk\Database\Includes
 */
class City
{
    use AutoFillObject;

    /** @var int $id */
    private $id;
    /** @var string $title */
    private $title;

    /**
     * идентификатор города, который можно использовать
     * для получения его названия
     * с помощью метода database.getCitiesById;
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
     * @return City
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * название города.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return City
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
