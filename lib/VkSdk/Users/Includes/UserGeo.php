<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 05.11.16
 * Time: 22:54
 */

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;

/**
 * информация о местоположении
 *
 * Class UserGeo
 * @package VkSdk\Users\Includes
 */
class UserGeo
{
    use AutoFillObject;

    /** @var string $type */
    private $type;
    /** @var string $coordinates */
    private $coordinates;
    /** @var UserPlace $place */
    private $place;

    /**
     * тип места;
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
     * @return UserGeo
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * координаты места;
     *
     * @return string
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * @param string $coordinates
     *
     * @return UserGeo
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * описание места (если оно добавлено)
     *
     * @return UserPlace
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param UserPlace $place
     *
     * @return UserGeo
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /** @inheritdoc */
    public function objectFields()
    {
        return [
            'place' => '\VkSdk\Users\Includes\UserPlace'
        ];
    }
}
