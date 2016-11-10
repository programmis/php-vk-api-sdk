<?php

namespace VkSdk\Market;

use VkSdk\Includes\Request;

/**
 * Adds an item to one or multiple collections.
 * Class MarketAddToAlbum
 * @package VkSdk\Market
 */
class MarketAddToAlbum extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * Collections IDs to add  item to.
     *
     * @return $this
     *
     * @param integer $album_id
     */
    public function addAlbumId($album_id)
    {
        $this->vkarg_album_ids[] = $album_id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id", "item_id", "album_ids"]);

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
     * @inheritdoc
     */
    public function getMethod()
    {
        return "market.addToAlbum";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Collections IDs to add  item to.
     *
     * @return $this
     *
     * @param array $album_ids
     */
    public function setAlbumIds(array $album_ids)
    {
        $this->vkarg_album_ids = $album_ids;

        return $this;
    }

    /**
     * Item ID.
     *
     * @return $this
     *
     * @param integer $item_id
     */
    public function setItemId($item_id)
    {
        $this->vkarg_item_id = $item_id;

        return $this;
    }

    /**
     * ID of an item owner community.
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
