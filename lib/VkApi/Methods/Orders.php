<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Orders
 *
 * @package VkApi\Methods
 */
class Orders
{
    use ApiTrait;

    /**
     * @return \VkSdk\Orders\OrdersChangeState
     */
    public function changeState()
    {
        return new \VkSdk\Orders\OrdersChangeState($this->token);
    }

    /**
     * @return \VkSdk\Orders\OrdersGet
     */
    public function get()
    {
        return new \VkSdk\Orders\OrdersGet($this->token);
    }

    /**
     * @return \VkSdk\Orders\OrdersGetAmount
     */
    public function getAmount()
    {
        return new \VkSdk\Orders\OrdersGetAmount($this->token);
    }

    /**
     * @return \VkSdk\Orders\OrdersGetById
     */
    public function getById()
    {
        return new \VkSdk\Orders\OrdersGetById($this->token);
    }
}
