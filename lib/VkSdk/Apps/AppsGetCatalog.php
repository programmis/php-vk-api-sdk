<?php

namespace VkSdk\Apps;

use lib\AutoFillObject;
use VkSdk\Apps\Includes\App;
use VkSdk\Includes\Request;

/**
 * Returns a list of applications (apps) available to users in the App Catalog.
 * Class AppsGetCatalog
 * @package VkSdk\Apps
 */
class AppsGetCatalog extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var App[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->vkarg_fields[] = $field;

        return $this;
    }

    /**
     * @return $this
     *
     * @param App $item
     */
    public function addItem(App $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["count"]);

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
     * Number of apps to return.
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
     * @return App[]
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
        return "apps.getCatalog";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Apps\Includes\App',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * '1' — to return additional fields 'screenshots', 'MAU', 'catalog_position', and 'international'. If set, 'count' must be less than or equal to '100'. ; '0' — not to return additional fields (default).
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
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->vkarg_fields = $fields;

        return $this;
    }

    /**
     * 'installed' — to return list of installed apps (only for mobile platform).
     *
     * @return $this
     *
     * @param string $filter
     */
    public function setFilter($filter)
    {
        $this->vkarg_filter = $filter;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $genre_id
     */
    public function setGenreId($genre_id)
    {
        $this->vkarg_genre_id = $genre_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $name_case
     */
    public function setNameCase($name_case)
    {
        $this->vkarg_name_case = $name_case;

        return $this;
    }

    /**
     * Offset required to return a specific subset of apps.
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
     * @return $this
     *
     * @param string $platform
     */
    public function setPlatform($platform)
    {
        $this->vkarg_platform = $platform;

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
     * @return $this
     *
     * @param boolean $return_friends
     */
    public function setReturnFriends($return_friends)
    {
        $this->vkarg_return_friends = $return_friends;

        return $this;
    }

    /**
     * Sort order:; 'popular_today' — popular for one day (default); 'visitors' — by visitors number ; 'create_date' — by creation date; 'growth_rate' — by growth rate; 'popular_week' — popular for one week
     *
     * @return $this
     *
     * @param string $sort
     */
    public function setSort($sort)
    {
        $this->vkarg_sort = $sort;

        return $this;
    }
}
