<?php
namespace VkSdk\Fave;

use lib\AutoFillObject;
use VkSdk\Fave\Includes\FavesLink;
use VkSdk\Includes\Request;

/**
 * Returns a list of links that the current user has bookmarked.
 * Class FaveGetLinks
 *
 * @package VkSdk\Fave
 */
class FaveGetLinks extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var FavesLink[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param FavesLink $item
     */
    public function addItem(FavesLink $item)
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
     * @return FavesLink[]
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
        return "fave.getLinks";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Fave\Includes\FavesLink',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Offset needed to return a specific subset of users.
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
}
