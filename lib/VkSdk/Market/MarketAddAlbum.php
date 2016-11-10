<?php
namespace VkSdk\Market;

use VkSdk\Includes\Request;

/**
 * Creates new collection of items
 * Class MarketAddAlbum
 *
 * @package VkSdk\Market
 */
class MarketAddAlbum extends Request
{

    /**
     * @var integer
     */
    public $market_album_id;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id", "title"]);

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
     * Album ID
     *
     * @return integer
     */
    public function getMarketAlbumId()
    {
        return $this->market_album_id;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "market.addAlbum";
    }

    /**
     * Set as main ('1' – set, '0' – no).
     *
     * @return $this
     *
     * @param boolean $main_album
     */
    public function setMainAlbum($main_album)
    {
        $this->vkarg_main_album = $main_album;

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

    /**
     * Cover photo ID.
     *
     * @return $this
     *
     * @param integer $photo_id
     */
    public function setPhotoId($photo_id)
    {
        $this->vkarg_photo_id = $photo_id;

        return $this;
    }

    /**
     * Collection title.
     *
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->vkarg_title = $title;

        return $this;
    }
}
