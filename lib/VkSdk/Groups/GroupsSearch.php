<?php

namespace VkSdk\Groups;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\Group;
use VkSdk\Includes\Request;

/**
 * Returns a list of communities matching the search criteria.
 *
 * Class GroupsSearch
 * @package VkSdk\Groups
 */
class GroupsSearch extends Request
{
    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var Group[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param Group $item
     */
    public function addItem(Group $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * result in $this->getCount(); and $this->getItems();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["q"]);

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
     * Total communities number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of communities to return.; "Note that you can not receive
     * more than first thousand of results, regardless of 'count' and
     * 'offset' values."
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
     * @return Group[]
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
        return "groups.search";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Groups\Includes\Group',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * City ID. If this parameter is transmitted, country_id is ignored.
     *
     * @return $this
     *
     * @param integer $city_id
     */
    public function setCityId($city_id)
    {
        $this->vkarg_city_id = $city_id;

        return $this;
    }

    /**
     * Country ID.
     *
     * @return $this
     *
     * @param integer $country_id
     */
    public function setCountryId($country_id)
    {
        $this->vkarg_country_id = $country_id;

        return $this;
    }

    /**
     * '1' —  to return only upcoming events. Works with the
     * 'type' = 'event' only.
     *
     * @return $this
     *
     * @param boolean $future
     */
    public function setFuture($future)
    {
        $this->vkarg_future = $future;

        return $this;
    }

    /**
     * '1' — to return communities with enabled market only.
     *
     * @return $this
     *
     * @param boolean $market
     */
    public function setMarket($market)
    {
        $this->vkarg_market = $market;

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
     * Search query string.
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
     * Sort order. Possible values:; *'0' — default sorting
     * (similar the full version of the site);;
     *'1' — by growth speed;;
     *'2'— by the "day attendance/members number" ratio;;
     *'3' — by the "Likes number/members number" ratio;;
     *'4' — by the "comments number/members number" ratio;;
     *'5' — by the "boards entries number/members number" ratio.; ;
     *
     * @return $this
     *
     * @param integer $sort
     */
    public function setSort($sort)
    {
        $this->vkarg_sort = $sort;

        return $this;
    }

    /**
     * Community type. Possible values: 'group, page, event.'
     *
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->vkarg_type = $type;

        return $this;
    }
}
