<?php
namespace VkSdk\Market\Includes;

/**
 * Class Section
 *
 * @package VkSdk\Market\Includes
 */
class Section
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
     * Section ID
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
     * Section name
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
