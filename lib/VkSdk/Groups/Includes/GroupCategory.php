<?php

namespace VkSdk\Groups\Includes;

use lib\AutoFillObject;

/**
 * Class GroupCategory
 * @package VkSdk\Groups\Includes
 */
class GroupCategory
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $subcategories;

    /**
     * Category ID
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
     * Category name
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

    /**
     * @return array
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }

    /**
     * @return $this
     *
     * @param array $subcategories
     */
    public function setSubcategories(array $subcategories)
    {
        $this->subcategories = $subcategories;

        return $this;
    }
}
