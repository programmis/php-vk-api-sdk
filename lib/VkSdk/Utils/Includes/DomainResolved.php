<?php
namespace VkSdk\Utils\Includes;

/**
 * Class DomainResolved
 *
 * @package VkSdk\Utils\Includes
 */
class DomainResolved
{

    /**
     * @var integer
     */
    public $object_id;

    /**
     * @var string
     */
    public $type;

    /**
     * Object ID
     *
     * @return integer
     */
    public function getObjectId()
    {
        return $this->object_id;
    }

    /**
     * @return $this
     *
     * @param integer $object_id
     */
    public function setObjectId($object_id)
    {
        $this->object_id = $object_id;

        return $this;
    }

    /**
     * Object type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
