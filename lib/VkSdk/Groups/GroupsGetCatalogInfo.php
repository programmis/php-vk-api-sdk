<?php
namespace VkSdk\Groups;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupCategoryFull;
use VkSdk\Includes\Request;

/**
 * Returns categories list for communities catalog
 * Class GroupsGetCatalogInfo
 *
 * @package VkSdk\Groups
 */
class GroupsGetCatalogInfo extends Request
{

    use AutoFillObject;

    /**
     * @var GroupCategoryFull[]
     */
    public $categories;

    /**
     * @var integer
     */
    public $enabled;

    /**
     * @return $this
     *
     * @param GroupCategoryFull $categorie
     */
    public function addCategorie(GroupCategoryFull $categorie)
    {
        $this->categories[] = $categorie;

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
     * @return GroupCategoryFull[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Information whether catalog is enabled for current user
     *
     * @return integer
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "groups.getCatalogInfo";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'categories' => [
                'class'  => 'VkSdk\Groups\Includes\GroupCategoryFull',
                'method' => 'addCategorie'
            ],
        ];
    }
}
