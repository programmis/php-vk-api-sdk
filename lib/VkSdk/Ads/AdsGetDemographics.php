<?php

namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Returns demographics for ads or campaigns.
 * Class AdsGetDemographics
 * @package VkSdk\Ads
 */
class AdsGetDemographics extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id", "ids_type", "ids", "period", "date_from", "date_to"]);

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
        return "ads.getDemographics";
    }

    /**
     * Advertising account ID.
     *
     * @return $this
     *
     * @param integer $account_id
     */
    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;

        return $this;
    }

    /**
     * Date to show statistics from. For different value of 'period' different date format is used:; *day: YYYY-MM-DD, example: 2011-09-27 — September 27, 2011; **0 — day it was created on;; *month: YYYY-MM, example: 2011-09 — September 2011; **0 — month it was created in;; *overall: 0.
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
     * Date to show statistics to. For different value of 'period' different date format is used:; *day: YYYY-MM-DD, example: 2011-09-27 — September 27, 2011; **0 — current day;; *month: YYYY-MM, example: 2011-09 — September 2011; **0 — current month;; *overall: 0.
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
     * IDs requested ads or campaigns, separated with a comma, depending on the value set in 'ids_type'. Maximum 2000 objects.
     *
     * @return $this
     *
     * @param string $ids
     */
    public function setIds($ids)
    {
        $this->vkarg_ids = $ids;

        return $this;
    }

    /**
     * Type of requested objects listed in 'ids' parameter:; *ad — ads;; *campaign — campaigns.;
     *
     * @return $this
     *
     * @param string $ids_type
     */
    public function setIdsType($ids_type)
    {
        $this->vkarg_ids_type = $ids_type;

        return $this;
    }

    /**
     * Data grouping by dates:; *day — statistics by days;; *month — statistics by months;; *overall — overall statistics.; 'date_from' and 'date_to' parameters set temporary limits.
     *
     * @return $this
     *
     * @param string $period
     */
    public function setPeriod($period)
    {
        $this->vkarg_period = $period;

        return $this;
    }
}
