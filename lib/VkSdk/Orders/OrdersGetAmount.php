<?php

namespace VkSdk\Orders;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Orders\Includes\Amount;

/**
 * Class OrdersGetAmount
 * @package VkSdk\Orders
 */
class OrdersGetAmount extends Request
{

    use AutoFillObject;

    /**
     * @var Amount
     */
    private $response;

    /**
     * @return $this
     *
     * @param string $vote
     */
    public function addVote($vote)
    {
        $this->vkarg_votes[] = $vote;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["user_id", "votes"]);

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
        return "orders.getAmount";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Orders\Includes\Amount',
        ];
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

    /**
     * @return $this
     *
     * @param array $votes
     */
    public function setVotes(array $votes)
    {
        $this->vkarg_votes = $votes;

        return $this;
    }
}
