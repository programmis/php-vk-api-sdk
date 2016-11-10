<?php

namespace VkSdk\Leads;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Leads\Includes\Checked;

/**
 * Checks if the user can start the lead.
 * Class LeadsCheckUser
 * @package VkSdk\Leads
 */
class LeadsCheckUser extends Request
{

    use AutoFillObject;

    /**
     * @var Checked
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
        return "leads.checkUser";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Leads\Includes\Checked',
        ];
    }

    /**
     * User age.
     *
     * @return $this
     *
     * @param integer $age
     */
    public function setAge($age)
    {
        $this->vkarg_age = $age;

        return $this;
    }

    /**
     * User country code.
     *
     * @return $this
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->vkarg_country = $country;

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
     * Value to be return in 'result' field when test mode is used.
     *
     * @return $this
     *
     * @param integer $test_result
     */
    public function setTestResult($test_result)
    {
        $this->vkarg_test_result = $test_result;

        return $this;
    }
}
