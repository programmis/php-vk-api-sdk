<?php

namespace VkSdk\Docs;

use lib\AutoFillObject;
use VkSdk\Docs\Includes\DocTypes;
use VkSdk\Includes\Request;

/**
 * Returns documents types available for current user.
 * Class DocsGetTypes
 * @package VkSdk\Docs
 */
class DocsGetTypes extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var DocTypes[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param DocTypes $item
     */
    public function addItem(DocTypes $item)
    {
        $this->items[] = $item;

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
     * @return DocTypes[]
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
        return "docs.getTypes";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Docs\Includes\DocTypes',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * ID of the user or community that owns the documents. Use a negative value to designate a community ID.
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
}
