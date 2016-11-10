<?php
namespace VkSdk\Market\Includes;

/**
 * Class Currency
 *
 * @package VkSdk\Market\Includes
 */
class Currency
{

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * Currency ID
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
     * Currency sign
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
