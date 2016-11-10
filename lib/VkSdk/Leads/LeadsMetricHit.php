<?php
namespace VkSdk\Leads;

use VkSdk\Includes\Request;

/**
 * Counts the metric event.
 * Class LeadsMetricHit
 *
 * @package VkSdk\Leads
 */
class LeadsMetricHit extends Request
{

    /**
     * @var string
     */
    public $redirect_link;

    /**
     * @var boolean
     */
    public $result;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["data"]);

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
        return "leads.metricHit";
    }

    /**
     * Redirect link
     *
     * @return string
     */
    public function getRedirectLink()
    {
        return $this->redirect_link;
    }

    /**
     * Information whether request has been processed successfully
     *
     * @return boolean
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Metric data obtained in the lead interface.
     *
     * @return $this
     *
     * @param string $data
     */
    public function setData($data)
    {
        $this->vkarg_data = $data;

        return $this;
    }
}
