<?php

namespace VkSdk\Orders;

use VkSdk\Includes\Request;

/**
 * Changes order status.
 * Class OrdersChangeState
 * @package VkSdk\Orders
 */
class OrdersChangeState extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["order_id", "action"]);

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
        return "orders.changeState";
    }

    /**
     * action to be done with the order. ; ; Available actions:; *cancel — to cancel unconfirmed order.; *charge — to confirm unconfirmed order. Applies only if processing of  notification failed.; *refund — to cancel confirmed order.;
     *
     * @return $this
     *
     * @param string $action
     */
    public function setAction($action)
    {
        $this->vkarg_action = $action;

        return $this;
    }

    /**
     * internal ID of the order in the application.
     *
     * @return $this
     *
     * @param integer $app_order_id
     */
    public function setAppOrderId($app_order_id)
    {
        $this->vkarg_app_order_id = $app_order_id;

        return $this;
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
