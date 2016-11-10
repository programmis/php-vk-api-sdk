<?php

namespace VkSdk\Leads\Includes;

use lib\AutoFillObject;

/**
 * Class Complete
 * @package VkSdk\Leads\Includes
 */
class Complete
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $cost;

    /**
     * @var integer
     */
    private $limit;

    /**
     * @var integer
     */
    private $spent;

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $success;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $test_mode;

    /**
     * Offer cost
     *
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @return $this
     *
     * @param integer $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Offer limit
     *
     * @return integer
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return $this
     *
     * @param integer $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Amount of spent votes
     *
     * @return integer
     */
    public function getSpent()
    {
        return $this->spent;
    }

    /**
     * @return $this
     *
     * @param integer $spent
     */
    public function setSpent($spent)
    {
        $this->spent = $spent;

        return $this;
    }

    /**
     * Returns 1 if request has been processed successfully
     *
     * @return integer
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @return $this
     *
     * @param integer $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * Information whether test mode is enabled
     *
     * @return integer
     */
    public function getTestMode()
    {
        return $this->test_mode;
    }

    /**
     * @return $this
     *
     * @param integer $test_mode
     */
    public function setTestMode($test_mode)
    {
        $this->test_mode = $test_mode;

        return $this;
    }
}
