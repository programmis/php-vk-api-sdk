<?php
namespace VkSdk\Groups\Includes;

/**
 * Class CountersGroup
 *
 * @package VkSdk\Groups\Includes
 */
class CountersGroup
{

    /**
     * @var integer
     */
    public $albums;

    /**
     * @var integer
     */
    public $audios;

    /**
     * @var integer
     */
    public $docs;

    /**
     * @var integer
     */
    public $market;

    /**
     * @var integer
     */
    public $photos;

    /**
     * @var integer
     */
    public $topics;

    /**
     * @var integer
     */
    public $videos;

    /**
     * Photo albums number
     *
     * @return integer
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * @return $this
     *
     * @param integer $albums
     */
    public function setAlbums($albums)
    {
        $this->albums = $albums;

        return $this;
    }

    /**
     * Audios number
     *
     * @return integer
     */
    public function getAudios()
    {
        return $this->audios;
    }

    /**
     * @return $this
     *
     * @param integer $audios
     */
    public function setAudios($audios)
    {
        $this->audios = $audios;

        return $this;
    }

    /**
     * Docs number
     *
     * @return integer
     */
    public function getDocs()
    {
        return $this->docs;
    }

    /**
     * @return $this
     *
     * @param integer $docs
     */
    public function setDocs($docs)
    {
        $this->docs = $docs;

        return $this;
    }

    /**
     * Market items number
     *
     * @return integer
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @return $this
     *
     * @param integer $market
     */
    public function setMarket($market)
    {
        $this->market = $market;

        return $this;
    }

    /**
     * Photos number
     *
     * @return integer
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @return $this
     *
     * @param integer $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * Topics number
     *
     * @return integer
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * @return $this
     *
     * @param integer $topics
     */
    public function setTopics($topics)
    {
        $this->topics = $topics;

        return $this;
    }

    /**
     * Videos number
     *
     * @return integer
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * @return $this
     *
     * @param integer $videos
     */
    public function setVideos($videos)
    {
        $this->videos = $videos;

        return $this;
    }
}
