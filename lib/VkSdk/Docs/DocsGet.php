<?php
namespace VkSdk\Docs;

use lib\AutoFillObject;
use VkSdk\Docs\Includes\Doc;
use VkSdk\Includes\Request;

/**
 * Returns detailed information about user or community documents.
 * Class DocsGet
 *
 * @package VkSdk\Docs
 */
class DocsGet extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Doc[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param Doc $item
     */
    public function addItem(Doc $item)
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
     * Number of documents to return. By default, all documents.
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
     * @return Doc[]
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
        return "docs.get";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Docs\Includes\Doc',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Offset needed to return a specific subset of documents.
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
