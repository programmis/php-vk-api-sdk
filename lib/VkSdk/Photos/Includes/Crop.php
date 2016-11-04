<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 04.11.16
 * Time: 21:23
 */

namespace VkSdk\Photos\Includes;

/**
 * вырезанная фотография пользователя
 *
 * Class Crop
 * @package VkSdk\Photos\Includes
 */
class Crop
{
    /** @var int $x */
    private $x;
    /** @var int $y */
    private $y;
    /** @var int $x2 */
    private $x2;
    /** @var int $y2 */
    private $y2;

    /**
     * координата X левого верхнего угла в процентах;
     *
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param int $x
     *
     * @return Crop
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * координата Y левого верхнего угла в процентах;
     *
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param int $y
     *
     * @return Crop
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * координата X правого нижнего угла в процентах;
     *
     * @return int
     */
    public function getX2()
    {
        return $this->x2;
    }

    /**
     * @param int $x2
     *
     * @return Crop
     */
    public function setX2($x2)
    {
        $this->x2 = $x2;

        return $this;
    }

    /**
     * координата Y правого нижнего угла в процентах.
     *
     * @return int
     */
    public function getY2()
    {
        return $this->y2;
    }

    /**
     * @param int $y2
     *
     * @return Crop
     */
    public function setY2($y2)
    {
        $this->y2 = $y2;

        return $this;
    }
}
