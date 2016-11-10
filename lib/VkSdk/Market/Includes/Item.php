<?php
namespace VkSdk\Market\Includes;

use lib\AutoFillObject;

/**
 * Class Item
 *
 * @package VkSdk\Market\Includes
 */
class Item
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $availability;

    /**
     * @var Category
     */
    public $category;

    /**
     * @var integer
     */
    public $date;

    /**
     * @var string
     */
    public $description;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $owner_id;

    /**
     * @var Price
     */
    public $price;

    /**
     * @var string
     */
    public $thumb_photo;

    /**
     * @var string
     */
    public $title;

    /**
     * Information whether the item is available
     *
     * @return integer
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @return $this
     *
     * @param integer $availability
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return $this
     *
     * @param Category $category
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Date when the item has been created in Unixtime
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return $this
     *
     * @param integer $date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Item description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return $this
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Item ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Item owner's ID
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    /**
     * @return Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return $this
     *
     * @param Price $price
     */
    public function setPrice(Price $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * URL of the preview image
     *
     * @return string
     */
    public function getThumbPhoto()
    {
        return $this->thumb_photo;
    }

    /**
     * @return $this
     *
     * @param string $thumb_photo
     */
    public function setThumbPhoto($thumb_photo)
    {
        $this->thumb_photo = $thumb_photo;

        return $this;
    }

    /**
     * Item title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'price'    => 'VkSdk\Market\Includes\Price',
            'category' => 'VkSdk\Market\Includes\Category',
        ];
    }
}
