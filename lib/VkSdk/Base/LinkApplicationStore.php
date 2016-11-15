<?php

namespace VkSdk\Base;

/**
 * Class LinkApplicationStore
 * @package VkSdk\Base
 */
class LinkApplicationStore
{
    /**
     * @var number
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * Store Id
     * @return number
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Store name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     *
     * @param number $id
     */
    public function setId(number $id)
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
