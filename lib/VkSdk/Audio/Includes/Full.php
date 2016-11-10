<?php

namespace VkSdk\Audio\Includes;

use lib\AutoFillObject;

/**
 * Class Full
 * @package VkSdk\Audio\Includes
 */
class Full
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
     * @var string
     */
    private $artist;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var integer
     */
    private $duration;

    /**
     * @var integer
     */
    private $genre_id;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $lyrics_id;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $no_search;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $url;

    /**
     * Access key for the audio
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
     * Artist name
     *
     * @return string
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @return $this
     *
     * @param string $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;

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
     * Duration in seconds
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return $this
     *
     * @param integer $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Genre ID
     *
     * @return integer
     */
    public function getGenreId()
    {
        return $this->genre_id;
    }

    /**
     * @return $this
     *
     * @param integer $genre_id
     */
    public function setGenreId($genre_id)
    {
        $this->genre_id = $genre_id;

        return $this;
    }

    /**
     * Audio ID
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
     * Lyrics ID
     *
     * @return integer
     */
    public function getLyricsId()
    {
        return $this->lyrics_id;
    }

    /**
     * @return $this
     *
     * @param integer $lyrics_id
     */
    public function setLyricsId($lyrics_id)
    {
        $this->lyrics_id = $lyrics_id;

        return $this;
    }

    /**
     * Information whether the audio is hidden from search
     *
     * @return integer
     */
    public function getNoSearch()
    {
        return $this->no_search;
    }

    /**
     * @return $this
     *
     * @param integer $no_search
     */
    public function setNoSearch($no_search)
    {
        $this->no_search = $no_search;

        return $this;
    }

    /**
     * Audio owner's ID
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
     * Title
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
     * URL of mp3 file
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return $this
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
