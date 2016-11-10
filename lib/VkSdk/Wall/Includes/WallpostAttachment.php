<?php

namespace VkSdk\Wall\Includes;

use lib\AutoFillObject;
use VkSdk\Audio\Includes\Full;
use VkSdk\Docs\Includes\Doc;
use VkSdk\Market\Includes\Album;
use VkSdk\Market\Includes\Item;
use VkSdk\Pages\Includes\WikipageFull;
use VkSdk\Photos\Includes\Photo;
use VkSdk\Photos\Includes\PhotoAlbum;
use VkSdk\Polls\Includes\Poll;
use VkSdk\Video\Includes\Video;

/**
 * Class WallpostAttachment
 * @package VkSdk\Wall\Includes
 */
class WallpostAttachment
{

    use AutoFillObject;

    /**
     * @var PhotoAlbum
     */
    private $album;

    /**
     * @var AppPost
     */
    private $app;

    /**
     * @var Full
     */
    private $audio;

    /**
     * @var Doc
     */
    private $doc;

    /**
     * @var Graffiti
     */
    private $graffiti;

    /**
     * @var Link
     */
    private $link;

    /**
     * @var Item
     */
    private $market;

    /**
     * @var Album
     */
    private $market_market_album;

    /**
     * @var AttachedNote
     */
    private $note;

    /**
     * @var WikipageFull
     */
    private $page;

    /**
     * @var Photo
     */
    private $photo;

    /**
     * @var array
     */
    private $photos_list;

    /**
     * @var Poll
     */
    private $poll;

    /**
     * @var PostedPhoto
     */
    private $posted_photo;

    /**
     * @var string
     */
    private $type;

    /**
     * @var Video
     */
    private $video;

    /**
     * @return PhotoAlbum
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @return $this
     *
     * @param PhotoAlbum $album
     */
    public function setAlbum(PhotoAlbum $album)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * @return AppPost
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * @return $this
     *
     * @param AppPost $app
     */
    public function setApp(AppPost $app)
    {
        $this->app = $app;

        return $this;
    }

    /**
     * @return Full
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * @return $this
     *
     * @param Full $audio
     */
    public function setAudio(Full $audio)
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * @return Doc
     */
    public function getDoc()
    {
        return $this->doc;
    }

    /**
     * @return $this
     *
     * @param Doc $doc
     */
    public function setDoc(Doc $doc)
    {
        $this->doc = $doc;

        return $this;
    }

    /**
     * @return Graffiti
     */
    public function getGraffiti()
    {
        return $this->graffiti;
    }

    /**
     * @return $this
     *
     * @param Graffiti $graffiti
     */
    public function setGraffiti(Graffiti $graffiti)
    {
        $this->graffiti = $graffiti;

        return $this;
    }

    /**
     * @return Link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return $this
     *
     * @param Link $link
     */
    public function setLink(Link $link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return Item
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @return $this
     *
     * @param Item $market
     */
    public function setMarket(Item $market)
    {
        $this->market = $market;

        return $this;
    }

    /**
     * @return Album
     */
    public function getMarketMarketAlbum()
    {
        return $this->market_market_album;
    }

    /**
     * @return $this
     *
     * @param Album $market_market_album
     */
    public function setMarketMarketAlbum(Album $market_market_album)
    {
        $this->market_market_album = $market_market_album;

        return $this;
    }

    /**
     * @return AttachedNote
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @return $this
     *
     * @param AttachedNote $note
     */
    public function setNote(AttachedNote $note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return WikipageFull
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return $this
     *
     * @param WikipageFull $page
     */
    public function setPage(WikipageFull $page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return $this
     *
     * @param Photo $photo
     */
    public function setPhoto(Photo $photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return array
     */
    public function getPhotosList()
    {
        return $this->photos_list;
    }

    /**
     * @return $this
     *
     * @param array $photos_list
     */
    public function setPhotosList(array $photos_list)
    {
        $this->photos_list = $photos_list;

        return $this;
    }

    /**
     * @return Poll
     */
    public function getPoll()
    {
        return $this->poll;
    }

    /**
     * @return $this
     *
     * @param Poll $poll
     */
    public function setPoll(Poll $poll)
    {
        $this->poll = $poll;

        return $this;
    }

    /**
     * @return PostedPhoto
     */
    public function getPostedPhoto()
    {
        return $this->posted_photo;
    }

    /**
     * @return $this
     *
     * @param PostedPhoto $posted_photo
     */
    public function setPostedPhoto(PostedPhoto $posted_photo)
    {
        $this->posted_photo = $posted_photo;

        return $this;
    }

    /**
     * Attachment type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Video
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @return $this
     *
     * @param Video $video
     */
    public function setVideo(Video $video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'photo'               => 'VkSdk\Photos\Includes\Photo',
            'posted_photo'        => 'VkSdk\Wall\Includes\PostedPhoto',
            'audio'               => 'VkSdk\Audio\Includes\Full',
            'video'               => 'VkSdk\Video\Includes\Video',
            'doc'                 => 'VkSdk\Docs\Includes\Doc',
            'link'                => 'VkSdk\Wall\Includes\Link',
            'graffiti'            => 'VkSdk\Wall\Includes\Graffiti',
            'note'                => 'VkSdk\Wall\Includes\AttachedNote',
            'app'                 => 'VkSdk\Wall\Includes\AppPost',
            'poll'                => 'VkSdk\Polls\Includes\Poll',
            'page'                => 'VkSdk\Pages\Includes\WikipageFull',
            'album'               => 'VkSdk\Photos\Includes\PhotoAlbum',
            'market_market_album' => 'VkSdk\Market\Includes\Album',
            'market'              => 'VkSdk\Market\Includes\Item',
        ];
    }
}
