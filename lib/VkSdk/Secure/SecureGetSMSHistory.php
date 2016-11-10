<?php

namespace VkSdk\Secure;

use VkSdk\Includes\Request;

/**
 * Shows a list of SMS notifications sent by the application using  method.
 * Class SecureGetSMSHistory
 * @package VkSdk\Secure
 */
class SecureGetSMSHistory extends Request
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
        return "secure.getSMSHistory";
    }

    /**
     * filter by start date. It is set as UNIX-time.
     *
     * @return $this
     *
     * @param integer $date_from
     */
    public function setDateFrom($date_from)
    {
        $this->vkarg_date_from = $date_from;

        return $this;
    }

    /**
     * filter by end date. It is set as UNIX-time.
     *
     * @return $this
     *
     * @param integer $date_to
     */
    public function setDateTo($date_to)
    {
        $this->vkarg_date_to = $date_to;

        return $this;
    }

    /**
     * number of returned posts. By default — 1000.
     *
     * @return $this
     *
     * @param integer $limit
     */
    public function setLimit($limit)
    {
        $this->vkarg_limit = $limit;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
