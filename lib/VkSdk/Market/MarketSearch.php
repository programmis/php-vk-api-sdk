<?php

namespace VkSdk\Market;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Market\Includes\ItemFull;

/**
 * Searches market items in a community's catalog
 * Class MarketSearch
 * @package VkSdk\Market
 */
class MarketSearch extends Request
{

    use AutoFillObject;

    /**
     * '0' — do not use reverse order, '1' — use reverse order
     */
    const REV_0 = 0;

    /**
     * '1' — use reverse order
     */
    const REV_1 = 1;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var ItemFull[]
     */
    private $items;

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
     * Comma-separated tag IDs list.
     *
     * @return $this
     *
     * @param integer $tag
     */
    public function addTag($tag)
    {
        $this->vkarg_tags[] = $tag;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id"]);

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
     * Number of items to return.
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
        return "market.search";
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
     * ID of an items owner community.
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }

    /**
     * Minimum item price value.
     *
     * @return $this
     *
     * @param integer $price_from
     */
    public function setPriceFrom($price_from)
    {
        $this->vkarg_price_from = $price_from;

        return $this;
    }

    /**
     * Maximum item price value.
     *
     * @return $this
     *
     * @param integer $price_to
     */
    public function setPriceTo($price_to)
    {
        $this->vkarg_price_to = $price_to;

        return $this;
    }

    /**
     * Search query, for example "pink slippers".
     *
     * @return $this
     *
     * @param string $q
     */
    public function setQ($q)
    {
        $this->vkarg_q = $q;

        return $this;
    }

    /**
     * '0' — do not use reverse order, '1' — use reverse order
     * see self::REV_* constants
     *
     * @return $this
     *
     * @param integer $rev
     */
    public function setRev($rev)
    {
        $this->vkarg_rev = $rev;

        return $this;
    }

    /**
     * Comma-separated tag IDs list.
     *
     * @return $this
     *
     * @param array $tags
     */
    public function setTags(array $tags)
    {
        $this->vkarg_tags = $tags;

        return $this;
    }
}
