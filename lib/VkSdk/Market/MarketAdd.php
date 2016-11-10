<?php

namespace VkSdk\Market;

use VkSdk\Includes\Request;

/**
 * Ads a new item to the market.
 * Class MarketAdd
 * @package VkSdk\Market
 */
class MarketAdd extends Request
{

    /**
     * @var integer
     */
    private $market_item_id;

    /**
     * IDs of additional photos.
     *
     * @return $this
     *
     * @param integer $photo_id
     */
    public function addPhotoId($photo_id)
    {
        $this->vkarg_photo_ids[] = $photo_id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id", "name", "description", "category_id", "price", "main_photo_id"]);

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
     * Item ID
     *
     * @return integer
     */
    public function getMarketItemId()
    {
        return $this->market_item_id;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "market.add";
    }

    /**
     * Item category ID.
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
     * Item status ('1' — deleted, '0' — not deleted).
     *
     * @return $this
     *
     * @param boolean $deleted
     */
    public function setDeleted($deleted)
    {
        $this->vkarg_deleted = $deleted;

        return $this;
    }

    /**
     * Item description.
     *
     * @return $this
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->vkarg_description = $description;

        return $this;
    }

    /**
     * Cover photo ID.
     *
     * @return $this
     *
     * @param integer $main_photo_id
     */
    public function setMainPhotoId($main_photo_id)
    {
        $this->vkarg_main_photo_id = $main_photo_id;

        return $this;
    }

    /**
     * Item name.
     *
     * @return $this
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->vkarg_name = $name;

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
     * IDs of additional photos.
     *
     * @return $this
     *
     * @param array $photo_ids
     */
    public function setPhotoIds(array $photo_ids)
    {
        $this->vkarg_photo_ids = $photo_ids;

        return $this;
    }

    /**
     * Item price.
     *
     * @return $this
     *
     * @param number $price
     */
    public function setPrice(number $price)
    {
        $this->vkarg_price = $price;

        return $this;
    }
}
