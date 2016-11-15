<?php

namespace VkSdk\Base;

/**
 * Class ObjectWithName
 * @package VkSdk\Base
 */
class ObjectWithName
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
     * Object ID
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Object name
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
