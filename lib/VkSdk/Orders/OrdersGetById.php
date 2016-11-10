<?php

namespace VkSdk\Orders;

use VkSdk\Includes\Request;

/**
 * Returns information about orders by their IDs.
 * Class OrdersGetById
 * @package VkSdk\Orders
 */
class OrdersGetById extends Request
{

    /**
     * order IDs (when information about several orders is requested).
     *
     * @return $this
     *
     * @param integer $order_id
     */
    public function addOrderId($order_id)
    {
        $this->vkarg_order_ids[] = $order_id;

        return $this;
    }

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
        return "orders.getById";
    }

    /**
     * order ID.
     *
     * @return $this
     *
     * @param integer $order_id
     */
    public function setOrderId($order_id)
    {
        $this->vkarg_order_id = $order_id;

        return $this;
    }

    /**
     * order IDs (when information about several orders is requested).
     *
     * @return $this
     *
     * @param array $order_ids
     */
    public function setOrderIds(array $order_ids)
    {
        $this->vkarg_order_ids = $order_ids;

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
