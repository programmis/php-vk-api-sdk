<?php

namespace VkSdk\Photos\Includes;

use lib\AutoFillObject;
use VkSdk\Base\Likes;

/**
 * Class PhotoFull
 * @package VkSdk\Photos\Includes
 */
class PhotoFull
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $access_key;

    /**
     * @var integer
     */
    private $album_id;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_comment;

    /**
     * @var object
     */
    private $comments;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var number
     */
    private $lat;

    /**
     * @var Likes
     */
    private $likes;

    /**
     * @var number
     */
    private $long;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var string
     */
    private $photo_1280;

    /**
     * @var string
     */
    private $photo_130;

    /**
     * @var string
     */
    private $photo_604;

    /**
     * @var string
     */
    private $photo_75;

    /**
     * @var string
     */
    private $photo_807;

    /**
     * @var integer
     */
    private $post_id;

    /**
     * @var object
     */
    private $reposts;

    /**
     * @var PhotoSizes[]
     */
    private $sizes;

    /**
     * @var object
     */
    private $tags;

    /**
     * @var string
     */
    private $text;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * @var integer
     */
    private $width;

    /**
     * @return $this
     *
     * @param PhotoSizes $size
     */
    public function addSize(PhotoSizes $size)
    {
        $this->sizes[] = $size;

        return $this;
    }

    /**
     * Access key for the photo
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->access_key;
    }

    /**
     * @return $this
     *
     * @param string $access_key
     */
    public function setAccessKey($access_key)
    {
        $this->access_key = $access_key;

        return $this;
    }

    /**
     * Album ID
     *
     * @return integer
     */
    public function getAlbumId()
    {
        return $this->album_id;
    }

    /**
     * @return $this
     *
     * @param integer $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->album_id = $album_id;

        return $this;
    }

    /**
     * Information whether current user can comment the photo
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
     * @return object
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @return $this
     *
     * @param object $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Date when uploaded
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
     * Original photo height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return $this
     *
     * @param integer $height
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Photo ID
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
     * Latitude
     *
     * @return number
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @return $this
     *
     * @param number $lat
     */
    public function setLat(number $lat)
    {
        $this->lat = $lat;

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
     * Longitude
     *
     * @return number
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @return $this
     *
     * @param number $long
     */
    public function setLong(number $long)
    {
        $this->long = $long;

        return $this;
    }

    /**
     * Photo owner's ID
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
     * URL of image with 1280 px width
     *
     * @return string
     */
    public function getPhoto1280()
    {
        return $this->photo_1280;
    }

    /**
     * @return $this
     *
     * @param string $photo_1280
     */
    public function setPhoto1280($photo_1280)
    {
        $this->photo_1280 = $photo_1280;

        return $this;
    }

    /**
     * URL of image with 130 px width
     *
     * @return string
     */
    public function getPhoto130()
    {
        return $this->photo_130;
    }

    /**
     * @return $this
     *
     * @param string $photo_130
     */
    public function setPhoto130($photo_130)
    {
        $this->photo_130 = $photo_130;

        return $this;
    }

    /**
     * URL of image with 604 px width
     *
     * @return string
     */
    public function getPhoto604()
    {
        return $this->photo_604;
    }

    /**
     * @return $this
     *
     * @param string $photo_604
     */
    public function setPhoto604($photo_604)
    {
        $this->photo_604 = $photo_604;

        return $this;
    }

    /**
     * URL of image with 75 px width
     *
     * @return string
     */
    public function getPhoto75()
    {
        return $this->photo_75;
    }

    /**
     * @return $this
     *
     * @param string $photo_75
     */
    public function setPhoto75($photo_75)
    {
        $this->photo_75 = $photo_75;

        return $this;
    }

    /**
     * URL of image with 807 px width
     *
     * @return string
     */
    public function getPhoto807()
    {
        return $this->photo_807;
    }

    /**
     * @return $this
     *
     * @param string $photo_807
     */
    public function setPhoto807($photo_807)
    {
        $this->photo_807 = $photo_807;

        return $this;
    }

    /**
     * Post ID
     *
     * @return integer
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * @return $this
     *
     * @param integer $post_id
     */
    public function setPostId($post_id)
    {
        $this->post_id = $post_id;

        return $this;
    }

    /**
     * @return object
     */
    public function getReposts()
    {
        return $this->reposts;
    }

    /**
     * @return $this
     *
     * @param object $reposts
     */
    public function setReposts($reposts)
    {
        $this->reposts = $reposts;

        return $this;
    }

    /**
     * @return PhotoSizes[]
     */
    public function getSizes()
    {
        return $this->sizes;
    }

    /**
     * @return $this
     *
     * @param array $sizes
     */
    public function setSizes(array $sizes)
    {
        $this->sizes = $sizes;

        return $this;
    }

    /**
     * @return object
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @return $this
     *
     * @param object $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Photo caption
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * ID of the user who have uploaded the photo
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Original photo width
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return $this
     *
     * @param integer $width
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'sizes' => [
                'class'  => 'VkSdk\Photos\Includes\PhotoSizes',
                'method' => 'addSize'
            ],
            'likes' => 'VkSdk\Base\Likes',
        ];
    }
}
