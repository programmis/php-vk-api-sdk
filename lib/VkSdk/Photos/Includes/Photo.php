<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 04.11.16
 * Time: 21:12
 */

namespace VkSdk\Photos\Includes;

/**
 * Объект photo, описывающий фотографию
 *
 * @see https://vk.com/dev/photo
 *
 * Class Photo
 * @package VkSdk\Photos\Includes
 */
class Photo
{
    /** @var int $id */
    private $id;
    /** @var int $album_id */
    private $album_id;
    /** @var int $owner_id */
    private $owner_id;
    /** @var int $user_id */
    private $user_id;
    /** @var string $text */
    private $text;
    /** @var int $date */
    private $date;
    /** @var array $sizes */
    private $sizes;
    /** @var string $photo_75 */
    private $photo_75;
    /** @var string $photo_130 */
    private $photo_130;
    /** @var string $photo_604 */
    private $photo_604;
    /** @var string $photo_807 */
    private $photo_807;
    /** @var string $photo_1280 */
    private $photo_1280;
    /** @var string $photo_2560 */
    private $photo_2560;
    /** @var int $width */
    private $width;
    /** @var int $height */
    private $height;

    /**
     * идентификатор фотографии.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Photo
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * идентификатор альбома, в котором находится фотография.
     *
     * @return int
     */
    public function getAlbumId()
    {
        return $this->album_id;
    }

    /**
     * @param int $album_id
     *
     * @return Photo
     */
    public function setAlbumId($album_id)
    {
        $this->album_id = $album_id;

        return $this;
    }

    /**
     * идентификатор владельца фотографии.
     *
     * @return int
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @param int $owner_id
     *
     * @return Photo
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    /**
     * идентификатор пользователя, загрузившего фото
     * (если фотография размещена в сообществе).
     * Для фотографий, размещенных от
     * имени сообщества, user_id = 100.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     *
     * @return Photo
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * текст описания фотографии.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return Photo
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * дата добавления в формате unixtime.
     *
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param int $date
     *
     * @return Photo
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * массив с копиями изображения в разных размерах.
     * См. Формат описания размеров фотографии.
     * Поле возвращается только при передаче
     * параметра photo_sizes = 1 в запросе.
     * Если параметр не передан, вместо
     * поля sizes возвращаются поля, описанные ниже.
     *
     * @return array
     */
    public function getSizes()
    {
        return $this->sizes;
    }

    /**
     * @param array $sizes
     *
     * @return Photo
     */
    public function setSizes($sizes)
    {
        $this->sizes = $sizes;

        return $this;
    }

    /**
     * URL копии фотографии с максимальным размером 75x75px.
     *
     * @return string
     */
    public function getPhoto75()
    {
        return $this->photo_75;
    }

    /**
     * @param string $photo_75
     *
     * @return Photo
     */
    public function setPhoto75($photo_75)
    {
        $this->photo_75 = $photo_75;

        return $this;
    }

    /**
     * URL копии фотографии с максимальным размером 130x130px.
     *
     * @return string
     */
    public function getPhoto130()
    {
        return $this->photo_130;
    }

    /**
     * @param string $photo_130
     *
     * @return Photo
     */
    public function setPhoto130($photo_130)
    {
        $this->photo_130 = $photo_130;

        return $this;
    }

    /**
     * URL копии фотографии с максимальным размером 604x604px.
     *
     * @return string
     */
    public function getPhoto604()
    {
        return $this->photo_604;
    }

    /**
     * @param string $photo_604
     *
     * @return Photo
     */
    public function setPhoto604($photo_604)
    {
        $this->photo_604 = $photo_604;

        return $this;
    }

    /**
     * URL копии фотографии с максимальным размером 807x807px.
     *
     * @return string
     */
    public function getPhoto807()
    {
        return $this->photo_807;
    }

    /**
     * @param string $photo_807
     *
     * @return Photo
     */
    public function setPhoto807($photo_807)
    {
        $this->photo_807 = $photo_807;

        return $this;
    }

    /**
     * URL копии фотографии с максимальным размером 1280x1024px.
     *
     * @return string
     */
    public function getPhoto1280()
    {
        return $this->photo_1280;
    }

    /**
     * @param string $photo_1280
     *
     * @return Photo
     */
    public function setPhoto1280($photo_1280)
    {
        $this->photo_1280 = $photo_1280;

        return $this;
    }

    /**
     * URL копии фотографии с максимальным размером 2560x2048px.
     *
     * @return string
     */
    public function getPhoto2560()
    {
        return $this->photo_2560;
    }

    /**
     * @param string $photo_2560
     *
     * @return Photo
     */
    public function setPhoto2560($photo_2560)
    {
        $this->photo_2560 = $photo_2560;

        return $this;
    }

    /**
     * ширина оригинала фотографии в пикселах.
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     *
     * @return Photo
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * высота оригинала фотографии в пикселах.
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     *
     * @return Photo
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
}
