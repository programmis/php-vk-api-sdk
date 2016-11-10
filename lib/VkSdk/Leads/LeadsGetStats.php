<?php

namespace VkSdk\Leads;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Leads\Includes\Lead;

/**
 * Returns lead stats data.
 * Class LeadsGetStats
 * @package VkSdk\Leads
 */
class LeadsGetStats extends Request
{

    use AutoFillObject;

    /**
     * @var Lead
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["lead_id"]);

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
        return "leads.getStats";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Leads\Includes\Lead',
        ];
    }

    /**
     * Day to finish stats (YYYY_MM_DD, e.g.2011-09-17).
     *
     * @return $this
     *
     * @param string $date_end
     */
    public function setDateEnd($date_end)
    {
        $this->vkarg_date_end = $date_end;

        return $this;
    }

    /**
     * Day to start stats from (YYYY_MM_DD, e.g.2011-09-17).
     *
     * @return $this
     *
     * @param string $date_start
     */
    public function setDateStart($date_start)
    {
        $this->vkarg_date_start = $date_start;

        return $this;
    }

    /**
     * Lead ID.
     *
     * @return $this
     *
     * @param integer $lead_id
     */
    public function setLeadId($lead_id)
    {
        $this->vkarg_lead_id = $lead_id;

        return $this;
    }

    /**
     * Secret key obtained from the lead testing interface.
     *
     * @return $this
     *
     * @param string $secret
     */
    public function setSecret($secret)
    {
        $this->vkarg_secret = $secret;

        return $this;
    }
}
