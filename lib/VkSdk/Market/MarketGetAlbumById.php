<?php

namespace VkSdk\Market;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Market\Includes\Album;

/**
 * Returns items album's data
 * Class MarketGetAlbumById
 *
*@package VkSdk\Market
 */
class MarketGetAlbumById extends Request
{
    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var Album[]
     */
    private $items;

    /** @var array $album_ids */
    private $album_ids = [];

    /**
     * collections identifiers to obtain data from
     *
     * @return $this
     *
     * @param integer $album_id
     */
    public function addAlbumId($album_id)
    {
        $this->album_ids[] = $album_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param Album $item
     */
    public function addItem(Album $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id", "album_ids"]);
        $this->setParameter("album_ids", $this->album_ids);

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
     * @return Album[]
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
        return "market.getAlbumById";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Market\Includes\Album',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * collections identifiers to obtain data from
     *
     * @return $this
     *
     * @param array $album_ids
     */
    public function setAlbumIds(array $album_ids)
    {
        $this->album_ids = $album_ids;

        return $this;
    }

    /**
     * identifier of an album owner community; "Note that community id in the 'owner_id'
     * parameter should be negative number. For example 'owner_id'=-1 matches
     * the [vk.com/apiclub|VK API] community "
     *
*@return $this

     *
*@param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }
}
