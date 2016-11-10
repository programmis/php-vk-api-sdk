<?php

namespace VkSdk\Stats;

use VkSdk\Includes\Request;

/**
 * Returns statistics of a community or an application.
 * Class StatsGet
 * @package VkSdk\Stats
 */
class StatsGet extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "stats.get";
    }

    /**
     * Application ID.
     *
     * @return $this
     *
     * @param integer $app_id
     */
    public function setAppId($app_id)
    {
        $this->vkarg_app_id = $app_id;

        return $this;
    }

    /**
     * Latest datestamp (in Unix time) of statistics to return.
     *
     * @return $this
     *
     * @param string $date_from
     */
    public function setDateFrom($date_from)
    {
        $this->vkarg_date_from = $date_from;

        return $this;
    }

    /**
     * End datestamp (in Unix time) of statistics to return.
     *
     * @return $this
     *
     * @param string $date_to
     */
    public function setDateTo($date_to)
    {
        $this->vkarg_date_to = $date_to;

        return $this;
    }

    /**
     * Community ID.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }
}
