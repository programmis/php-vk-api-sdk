<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Leads
 *
 * @package VkApi\Methods
 */
class Leads
{
    use ApiTrait;

    /**
     * @return \VkSdk\Leads\LeadsCheckUser
     */
    public function checkUser()
    {
        return new \VkSdk\Leads\LeadsCheckUser($this->token);
    }

    /**
     * @return \VkSdk\Leads\LeadsComplete
     */
    public function complete()
    {
        return new \VkSdk\Leads\LeadsComplete($this->token);
    }

    /**
     * @return \VkSdk\Leads\LeadsGetStats
     */
    public function getStats()
    {
        return new \VkSdk\Leads\LeadsGetStats($this->token);
    }

    /**
     * @return \VkSdk\Leads\LeadsGetUsers
     */
    public function getUsers()
    {
        return new \VkSdk\Leads\LeadsGetUsers($this->token);
    }

    /**
     * @return \VkSdk\Leads\LeadsMetricHit
     */
    public function metricHit()
    {
        return new \VkSdk\Leads\LeadsMetricHit($this->token);
    }

    /**
     * @return \VkSdk\Leads\LeadsStart
     */
    public function start()
    {
        return new \VkSdk\Leads\LeadsStart($this->token);
    }
}
