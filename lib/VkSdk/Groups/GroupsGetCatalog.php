<?php

namespace VkSdk\Groups;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\Group;
use VkSdk\Includes\Request;

/**
 * Returns communities list for a catalog category.
 * Class GroupsGetCatalog
 * @package VkSdk\Groups
 */
class GroupsGetCatalog extends Request
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
     * Total communities number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
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
        return "groups.getCatalog";
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
     * Category id received from .
     *
     * @return $this
     *
     * @param integer $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->vkarg_category_id = $category_id;

        return $this;
    }

    /**
     * Subcategory id received from .
     *
     * @return $this
     *
     * @param integer $subcategory_id
     */
    public function setSubcategoryId($subcategory_id)
    {
        $this->vkarg_subcategory_id = $subcategory_id;

        return $this;
    }
}
