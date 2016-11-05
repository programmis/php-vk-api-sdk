<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 04.11.16
 * Time: 0:12
 */

namespace VkSdk\Database\Includes;

use lib\AutoFillObject;

/**
 * информация о стране
 *
 * Class Country
 * @package VkSdk\Database\Includes
 */
class Country
{
    use AutoFillObject;

    /** @var int $id */
    private $id;
    /** @var string $title */
    private $title;

    /**
     * идентификатор страны, который можно использовать
     * для получения ее названия с помощью
     * метода database.getCountriesById;
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
     * @return Country
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * название страны.
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
     * @return Country
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
