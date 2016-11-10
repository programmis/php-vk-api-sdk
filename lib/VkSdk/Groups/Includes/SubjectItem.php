<?php
namespace VkSdk\Groups\Includes;

/**
 * Class SubjectItem
 *
 * @package VkSdk\Groups\Includes
 */
class SubjectItem
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
     * Subject ID
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
     * Subject title
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
