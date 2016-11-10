<?php

namespace VkSdk\Groups\Includes;

use lib\AutoFillObject;
use VkSdk\Base\Place;

/**
 * Class GroupSettings
 * @package VkSdk\Groups\Includes
 */
class GroupSettings
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $access;

    /**
     * @var string
     */
    private $address;

    /**
     * @var integer
     */
    private $audio;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $docs;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $obscene_filter;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $obscene_stopwords;

    /**
     * @var string
     */
    private $obscene_words;

    /**
     * @var integer
     */
    private $photos;

    /**
     * @var Place
     */
    private $place;

    /**
     * @var string
     */
    private $rss;

    /**
     * @var integer
     */
    private $subject;

    /**
     * @var SubjectItem[]
     */
    private $subject_list;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $topics;

    /**
     * @var integer
     */
    private $video;

    /**
     * @var integer
     */
    private $wall;

    /**
     * @var string
     */
    private $website;

    /**
     * @var integer
     */
    private $wiki;

    /**
     * @return $this
     *
     * @param SubjectItem $subject_list
     */
    public function addSubjectList(SubjectItem $subject_list)
    {
        $this->subject_list[] = $subject_list;

        return $this;
    }

    /**
     * Community access settings
     *
     * @return integer
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * @return $this
     *
     * @param integer $access
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Community's page domain
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return $this
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Audio settings
     *
     * @return integer
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @return $this
     *
     * @param integer $audio
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * Community description
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
     * Docs settings
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
     * Information whether the obscene filter is enabled
     *
     * @return integer
     */
    public function getObsceneFilter()
    {
        return $this->obscene_filter;
    }

    /**
     * @return $this
     *
     * @param integer $obscene_filter
     */
    public function setObsceneFilter($obscene_filter)
    {
        $this->obscene_filter = $obscene_filter;

        return $this;
    }

    /**
     * Information whether the stopwords filter is enabled
     *
     * @return integer
     */
    public function getObsceneStopwords()
    {
        return $this->obscene_stopwords;
    }

    /**
     * @return $this
     *
     * @param integer $obscene_stopwords
     */
    public function setObsceneStopwords($obscene_stopwords)
    {
        $this->obscene_stopwords = $obscene_stopwords;

        return $this;
    }

    /**
     * The list of stop words
     *
     * @return string
     */
    public function getObsceneWords()
    {
        return $this->obscene_words;
    }

    /**
     * @return $this
     *
     * @param string $obscene_words
     */
    public function setObsceneWords($obscene_words)
    {
        $this->obscene_words = $obscene_words;

        return $this;
    }

    /**
     * Photos settings
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
     * @return Place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @return $this
     *
     * @param Place $place
     */
    public function setPlace(Place $place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * URL of the RSS feed
     *
     * @return string
     */
    public function getRss()
    {
        return $this->rss;
    }

    /**
     * @return $this
     *
     * @param string $rss
     */
    public function setRss($rss)
    {
        $this->rss = $rss;

        return $this;
    }

    /**
     * Community subject ID
     *
     * @return integer
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return $this
     *
     * @param integer $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return SubjectItem[]
     */
    public function getSubjectList()
    {
        return $this->subject_list;
    }

    /**
     * @return $this
     *
     * @param array $subject_list
     */
    public function setSubjectList(array $subject_list)
    {
        $this->subject_list = $subject_list;

        return $this;
    }

    /**
     * Community title
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
     * Topics settings
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
     * Video settings
     *
     * @return integer
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @return $this
     *
     * @param integer $video
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Wall settings
     *
     * @return integer
     */
    public function getWall()
    {
        return $this->wall;
    }

    /**
     * @return $this
     *
     * @param integer $wall
     */
    public function setWall($wall)
    {
        $this->wall = $wall;

        return $this;
    }

    /**
     * Community website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @return $this
     *
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Wiki settings
     *
     * @return integer
     */
    public function getWiki()
    {
        return $this->wiki;
    }

    /**
     * @return $this
     *
     * @param integer $wiki
     */
    public function setWiki($wiki)
    {
        $this->wiki = $wiki;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'place'        => 'VkSdk\Base\Place',
            'subject_list' => [
                'class'  => 'VkSdk\Groups\Includes\SubjectItem',
                'method' => 'addSubjectList'
            ],
        ];
    }
}
