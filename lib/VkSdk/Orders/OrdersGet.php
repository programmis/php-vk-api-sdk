<?php

namespace VkSdk\Orders;

use VkSdk\Includes\Request;

/**
 * Returns a list of orders.
 * Class OrdersGet
 * @package VkSdk\Orders
 */
class OrdersGet extends Request
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
        return "orders.get";
    }

    /**
     * number of returned orders.
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
     * if this parameter is set to 1, this method returns a list of test mode orders. By default — 0.
     *
     * @return $this
     *
     * @param boolean $test_mode
     */
    public function setTestMode($test_mode)
    {
        $this->vkarg_test_mode = $test_mode;

        return $this;
    }
}
