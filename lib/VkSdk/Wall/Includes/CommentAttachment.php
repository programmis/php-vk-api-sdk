<?php

namespace VkSdk\Wall\Includes;

use lib\AutoFillObject;
use VkSdk\Audio\Includes\Full;
use VkSdk\Base\Sticker;
use VkSdk\Docs\Includes\Doc;
use VkSdk\Market\Includes\Album;
use VkSdk\Market\Includes\Item;
use VkSdk\Pages\Includes\WikipageFull;
use VkSdk\Photos\Includes\Photo;
use VkSdk\Video\Includes\Video;

/**
 * Class CommentAttachment
 * @package VkSdk\Wall\Includes
 */
class CommentAttachment
{

    use AutoFillObject;

    /**
     * @var Full
     */
    private $audio;

    /**
     * @var Doc
     */
    private $doc;

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
     * @var Sticker
     */
    private $sticker;

    /**
     * @var string
     */
    private $type;

    /**
     * @var Video
     */
    private $video;

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
     * @return Sticker
     */
    public function getSticker()
    {
        return $this->sticker;
    }

    /**
     * @return $this
     *
     * @param Sticker $sticker
     */
    public function setSticker(Sticker $sticker)
    {
        $this->sticker = $sticker;

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
            'audio'               => 'VkSdk\Audio\Includes\Full',
            'video'               => 'VkSdk\Video\Includes\Video',
            'doc'                 => 'VkSdk\Docs\Includes\Doc',
            'link'                => 'VkSdk\Wall\Includes\Link',
            'note'                => 'VkSdk\Wall\Includes\AttachedNote',
            'page'                => 'VkSdk\Pages\Includes\WikipageFull',
            'market_market_album' => 'VkSdk\Market\Includes\Album',
            'market'              => 'VkSdk\Market\Includes\Item',
            'sticker'             => 'VkSdk\Base\Sticker',
        ];
    }
}
