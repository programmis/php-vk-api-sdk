<?php

namespace VkSdk\Account\Includes;

use lib\AutoFillObject;

/**
 * Class NameRequest
 * @package VkSdk\Account\Includes
 */
class NameRequest
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $first_name;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $last_name;

    /**
     * @var string
     */
    private $status;

    /**
     * First name in request
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
     * Request ID needed to cancel the request
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
     * Last name in request
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

    /**
     * Request status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return $this
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
