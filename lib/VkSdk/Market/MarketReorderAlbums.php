<?php

namespace VkSdk\Market;

use VkSdk\Includes\Request;

/**
 * Reorders the collections list.
 *
 * Class MarketReorderAlbums
 * @package VkSdk\Market
 */
class MarketReorderAlbums extends Request
{
    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * result in $this->getResponse();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id", "album_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->response = $json->response;

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
        return "market.reorderAlbums";
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
     * ID of a collection to place current collection after it.
     *
     * @return $this
     *
     * @param integer $after
     */
    public function setAfter($after)
    {
        $this->vkarg_after = $after;

        return $this;
    }

    /**
     * Collection ID.
     *
     * @return $this
     *
     * @param integer $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->vkarg_album_id = $album_id;

        return $this;
    }

    /**
     * ID of a collection to place current collection before it.
     *
     * @return $this
     *
     * @param integer $before
     */
    public function setBefore($before)
    {
        $this->vkarg_before = $before;

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
