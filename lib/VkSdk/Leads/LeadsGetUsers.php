<?php

namespace VkSdk\Leads;

use VkSdk\Includes\Request;

/**
 * Returns a list of last user actions for the offer.
 * Class LeadsGetUsers
 * @package VkSdk\Leads
 */
class LeadsGetUsers extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["offer_id", "secret"]);

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
        return "leads.getUsers";
    }

    /**
     * Number of results to return.
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * Offer ID.
     *
     * @return $this
     *
     * @param integer $offer_id
     */
    public function setOfferId($offer_id)
    {
        $this->vkarg_offer_id = $offer_id;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of results.
     *
     * @return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * Sort order. Possible values:; *'1' — chronological;; *'0' — reverse chronological.
     *
     * @return $this
     *
     * @param boolean $reverse
     */
    public function setReverse($reverse)
    {
        $this->vkarg_reverse = $reverse;

        return $this;
    }

    /**
     * Secret key obtained in the lead testing interface.
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

    /**
     * Action type. Possible values:; *'0' — start;; *'1' — finish;; *'2' — blocking users;; *'3' — start in a test mode;; *'4' — finish in a test mode.;
     *
     * @return $this
     *
     * @param integer $status
     */
    public function setStatus($status)
    {
        $this->vkarg_status = $status;

        return $this;
    }
}
