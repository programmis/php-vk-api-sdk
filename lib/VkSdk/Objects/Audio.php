<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 05.11.16
 * Time: 21:44
 */

namespace VkSdk\Objects;

use lib\AutoFillObject;

/**
 * Объект, описывающий аудиозапись
 *
 * @see https://vk.com/dev/objects/audio
 *
 * Class Audio
 * @package VkSdk\Objects
 */
class Audio
{
    use AutoFillObject;

    /** @var int $id */
    private $id;
    /** @var int $owner_id */
    private $owner_id;
    /** @var string $artist */
    private $artist;
    /** @var string $title */
    private $title;
    /** @var int $duration */
    private $duration;
    /** @var string $url */
    private $url;
    /** @var int $lyrics_id */
    private $lyrics_id;
    /** @var int $album_id */
    private $album_id;
    /** @var int $genre_id */
    private $genre_id;
    /** @var int $date */
    private $date;
    /** @var bool $no_search */
    private $no_search;

    /**
     * идентификатор аудиозаписи.
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
     * @return Audio
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * идентификатор владельца аудиозаписи.
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
     * @return Audio
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    /**
     * исполнитель.
     *
     * @return string
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param string $artist
     *
     * @return Audio
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * название композиции.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Audio
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * длительность аудиозаписи в секундах.
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     *
     * @return Audio
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * ссылка на mp3.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return Audio
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * идентификатор текста аудиозаписи (если доступно).
     *
     * @return int
     */
    public function getLyricsId()
    {
        return $this->lyrics_id;
    }

    /**
     * @param int $lyrics_id
     *
     * @return Audio
     */
    public function setLyricsId($lyrics_id)
    {
        $this->lyrics_id = $lyrics_id;

        return $this;
    }

    /**
     * идентификатор альбома, в котором находится аудиозапись (если присвоен)
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
     * @return Audio
     */
    public function setAlbumId($album_id)
    {
        $this->album_id = $album_id;

        return $this;
    }

    /**
     * идентификатор жанра из списка аудио жанров.
     * см. AudioGenres::GENRE_* константы
     *
     * @return int
     */
    public function getGenreId()
    {
        return $this->genre_id;
    }

    /**
     * @param int $genre_id
     *
     * @return Audio
     */
    public function setGenreId($genre_id)
    {
        $this->genre_id = $genre_id;

        return $this;
    }

    /**
     * дата добавления.
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
     * @return Audio
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * true, если включена опция «Не выводить при поиске».
     * Если опция отключена, поле не возвращается.
     *
     * @return boolean
     */
    public function isNoSearch()
    {
        return $this->no_search ? true : false;
    }

    /**
     * @param boolean $no_search
     *
     * @return Audio
     */
    public function setNoSearch($no_search)
    {
        $this->no_search = $no_search;

        return $this;
    }
}
