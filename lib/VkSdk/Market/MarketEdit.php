<?php

namespace VkSdk\Market;

use VkSdk\Includes\Request;

/**
 * Edits an item.
 *
 * Class MarketEdit
 * @package VkSdk\Market
 */
class MarketEdit extends Request
{
    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;
    /** @var array $photo_ids */
    private $photo_ids = [];

    /**
     * IDs of additional photos.
     *
     * @return $this
     *
     * @param integer $photo_id
     */
    public function addPhotoId($photo_id)
    {
        $this->photo_ids[] = $photo_id;

        return $this;
    }

    /**
     * result in $this->getResponse();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams([
            "owner_id",
            "item_id",
            "name",
            "description",
            "category_id",
            "price",
            "main_photo_id"
        ]);
        $this->setParameter('photo_ids', $this->photo_ids);

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
        return "market.edit";
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
        $this->photo_ids = $photo_ids;

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
