<?php

namespace VkSdk\Market\Includes;

use lib\AutoFillObject;
use VkSdk\Base\Likes;
use VkSdk\Photos\Includes\Photo;

/**
 * Class ItemFull
 * @package VkSdk\Market\Includes
 */
class ItemFull
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $availability;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_comment;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_repost;

    /**
     * @var Category
     */
    private $category;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var Likes
     */
    private $likes;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var Photo[]
     */
    private $photos;

    /**
     * @var Price
     */
    private $price;

    /**
     * @var string
     */
    private $thumb_photo;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $views_count;

    /**
     * @return $this
     *
     * @param Photo $photo
     */
    public function addPhoto(Photo $photo)
    {
        $this->photos[] = $photo;

        return $this;
    }

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
     * Information whether current use can comment the item
     *
     * @return integer
     */
    public function getCanComment()
    {
        return $this->can_comment;
    }

    /**
     * @return $this
     *
     * @param integer $can_comment
     */
    public function setCanComment($can_comment)
    {
        $this->can_comment = $can_comment;

        return $this;
    }

    /**
     * Information whether current use can repost the item
     *
     * @return integer
     */
    public function getCanRepost()
    {
        return $this->can_repost;
    }

    /**
     * @return $this
     *
     * @param integer $can_repost
     */
    public function setCanRepost($can_repost)
    {
        $this->can_repost = $can_repost;

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
     * @return Likes
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @return $this
     *
     * @param Likes $likes
     */
    public function setLikes(Likes $likes)
    {
        $this->likes = $likes;

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
     * @return Photo[]
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @return $this
     *
     * @param array $photos
     */
    public function setPhotos(array $photos)
    {
        $this->photos = $photos;

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
     * Views number
     *
     * @return integer
     */
    public function getViewsCount()
    {
        return $this->views_count;
    }

    /**
     * @return $this
     *
     * @param integer $views_count
     */
    public function setViewsCount($views_count)
    {
        $this->views_count = $views_count;

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
            'photos'   => [
                'class'  => 'VkSdk\Photos\Includes\Photo',
                'method' => 'addPhoto'
            ],
            'likes'    => 'VkSdk\Base\Likes',
        ];
    }
}
