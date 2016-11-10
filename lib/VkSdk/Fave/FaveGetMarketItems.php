<?php

namespace VkSdk\Fave;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Market\Includes\Item;

/**
 * Returns market items bookmarked by current user.
 * Class FaveGetMarketItems
 * @package VkSdk\Fave
 */
class FaveGetMarketItems extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var Item[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param Item $item
     */
    public function addItem(Item $item)
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
     * Number of results to return. ;
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
     * @return Item[]
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
        return "fave.getMarketItems";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Market\Includes\Item',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * '1' – to return additional fields  'likes, can_comment, can_repost, photos'. By default: '0'.
     *
     * @return $this
     *
     * @param boolean $extended
     */
    public function setExtended($extended)
    {
        $this->vkarg_extended = $extended;

        return $this;
    }
}
