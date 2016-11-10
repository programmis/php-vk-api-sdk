<?php

namespace VkSdk\Leads;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Leads\Includes\Start;

/**
 * Creates new session for the user passing the offer.
 * Class LeadsStart
 * @package VkSdk\Leads
 */
class LeadsStart extends Request
{

    use AutoFillObject;

    /**
     * @var Start
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["lead_id", "secret"]);

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
        return "leads.start";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Leads\Includes\Start',
        ];
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
     * Secret key from the lead testing interface.
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
