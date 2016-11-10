<?php

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;

/**
 * Class UserMin
 * @package VkSdk\Users\Includes
 */
class UserMin
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $deactivated;

    /**
     * @var string
     */
    private $first_name;

    /**
     * @var integer
     */
    private $hidden;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $last_name;

    /**
     * Returns if a profile is deleted or blocked
     *
     * @return string
     */
    public function getDeactivated()
    {
        return $this->deactivated;
    }

    /**
     * @return $this
     *
     * @param string $deactivated
     */
    public function setDeactivated($deactivated)
    {
        $this->deactivated = $deactivated;

        return $this;
    }

    /**
     * User first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return $this
     *
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Returns if a profile is hidden.
     *
     * @return integer
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * @return $this
     *
     * @param integer $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * User ID
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
     * User last name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return $this
     *
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }
}
