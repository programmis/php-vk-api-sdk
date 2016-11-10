<?php
namespace VkSdk\Market\Includes;

use lib\AutoFillObject;

/**
 * Class Category
 *
 * @package VkSdk\Market\Includes
 */
class Category
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var Section
     */
    public $section;

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
     * @return Section
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @return $this
     *
     * @param Section $section
     */
    public function setSection(Section $section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'section' => 'VkSdk\Market\Includes\Section',
        ];
    }
}
