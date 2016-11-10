<?php
namespace VkSdk\Account;

use lib\AutoFillObject;
use VkSdk\Account\Includes\Offer;
use VkSdk\Includes\Request;

/**
 * Returns a list of active ads (offers) which executed by the user will bring him/her respective number of votes to his balance in the application.
 * Class AccountGetActiveOffers
 *
 * @package VkSdk\Account
 */
class AccountGetActiveOffers extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Offer[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param Offer $item
     */
    public function addItem(Offer $item)
    {
        $this->items[] = $item;

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
     * Total number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
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
     * @return Offer[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "account.getActiveOffers";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Account\Includes\Offer',
                'method' => 'addItem'
            ],
        ];
    }
}
