<?php

namespace VkSdk\Leads\Includes;

use lib\AutoFillObject;

/**
 * Class Lead
 * @package VkSdk\Leads\Includes
 */
class Lead
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $completed;

    /**
     * @var integer
     */
    private $cost;

    /**
     * @var object
     */
    private $days;

    /**
     * @var integer
     */
    private $impressions;

    /**
     * @var integer
     */
    private $limit;

    /**
     * @var integer
     */
    private $spent;

    /**
     * @var integer
     */
    private $started;

    /**
     * Completed offers number
     *
     * @return integer
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * @return $this
     *
     * @param integer $completed
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;

        return $this;
    }

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
     * @return object
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @return $this
     *
     * @param object $days
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
    }

    /**
     * Impressions number
     *
     * @return integer
     */
    public function getImpressions()
    {
        return $this->impressions;
    }

    /**
     * @return $this
     *
     * @param integer $impressions
     */
    public function setImpressions($impressions)
    {
        $this->impressions = $impressions;

        return $this;
    }

    /**
     * Lead limit
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
     * Started offers number
     *
     * @return integer
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * @return $this
     *
     * @param integer $started
     */
    public function setStarted($started)
    {
        $this->started = $started;

        return $this;
    }
}
