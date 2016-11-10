<?php
namespace VkSdk\Newsfeed;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Newsfeed\Includes\Lists;

/**
 * Returns a list of newsfeeds followed by the current user.
 * Class NewsfeedGetLists
 *
 * @package VkSdk\Newsfeed
 */
class NewsfeedGetLists extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Lists[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param Lists $item
     */
    public function addItem(Lists $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * numeric list identifiers.
     *
     * @return $this
     *
     * @param integer $list_id
     */
    public function addListId($list_id)
    {
        $this->vkarg_list_ids[] = $list_id;

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
     * @return Lists[]
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
        return "newsfeed.getLists";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Newsfeed\Includes\Lists',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * numeric list identifiers.
     *
     * @return $this
     *
     * @param array $list_ids
     */
    public function setListIds(array $list_ids)
    {
        $this->vkarg_list_ids = $list_ids;

        return $this;
    }
}
