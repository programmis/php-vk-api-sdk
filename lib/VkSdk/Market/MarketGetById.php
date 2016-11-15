<?php

namespace VkSdk\Market;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Market\Includes\ItemFull;

/**
 * Returns information about market items by their ids.
 *
 * Class MarketGetById
 * @package VkSdk\Market
 */
class MarketGetById extends Request
{
    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var ItemFull[]
     */
    private $items;
    /** @var array $item_ids */
    private $item_ids = [];

    /**
     * @return $this
     *
     * @param ItemFull $item
     */
    public function addItem(ItemFull $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Comma-separated ids list: {user id}_{item id}.;
     * If an item belongs to a community -{community id} is used. ; "
     * 'Videos' value example: ; '-4363_136089719,13245770_137352259'"
     *
     * @return $this
     *
     * @param string $item_id
     */
    public function addItemId($item_id)
    {
        $this->item_ids[] = $item_id;

        return $this;
    }

    /**
     * result in $this->getCount(); and $this->getItems();
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["item_ids"]);
        $this->setParameter('item_ids', $this->item_ids);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->fillByJson($json->response);

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
     * @return ItemFull[]
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
        return "market.getById";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Market\Includes\ItemFull',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * '1' – to return additional fields: 'likes, can_comment, car_repost, photos'. By default: '0'.
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

    /**
     * Comma-separated ids list: {user id}_{item id}.; If an item belongs to a community -{community id} is used. ; "
     * 'Videos' value example: ; '-4363_136089719,13245770_137352259'"
     *
     * @return $this
     *
     * @param array $item_ids
     */
    public function setItemIds(array $item_ids)
    {
        $this->item_ids = $item_ids;

        return $this;
    }
}
