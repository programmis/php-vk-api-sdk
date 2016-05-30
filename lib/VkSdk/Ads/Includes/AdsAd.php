<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 30.05.16
 * Time: 21:55
 */

namespace VkSdk\Ads\Includes;


class AdsAd
{
    /** @var  integer $id */
    private $id;
    /** @var  integer $campaign_id */
    private $campaign_id;
    /** @var  integer $ad_format */
    private $ad_format;
    /** @var  integer $cost_type */
    private $cost_type;
    /** @var  integer $video */
    private $video;
    /** @var  string $title */
    private $title;
    /** @var  string $description */
    private $description;
    /** @var  string $link_url */
    private $link_url;
    /** @var  string $link_domain */
    private $link_domain;
    /** @var  string $preview_link */
    private $preview_link;
    /** @var  string $image_src */
    private $image_src;
    /** @var  string $image_src_2x */
    private $image_src_2x;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AdsAd
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    /**
     * @param int $campaign_id
     * @return AdsAd
     */
    public function setCampaignId($campaign_id)
    {
        $this->campaign_id = $campaign_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdFormat()
    {
        return $this->ad_format;
    }

    /**
     * @param int $ad_format
     * @return AdsAd
     */
    public function setAdFormat($ad_format)
    {
        $this->ad_format = $ad_format;
        return $this;
    }

    /**
     * @return int
     */
    public function getCostType()
    {
        return $this->cost_type;
    }

    /**
     * @param int $cost_type
     * @return AdsAd
     */
    public function setCostType($cost_type)
    {
        $this->cost_type = $cost_type;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param int $video
     * @return AdsAd
     */
    public function setVideo($video)
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return AdsAd
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return AdsAd
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->link_url;
    }

    /**
     * @param string $link_url
     * @return AdsAd
     */
    public function setLinkUrl($link_url)
    {
        $this->link_url = $link_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkDomain()
    {
        return $this->link_domain;
    }

    /**
     * @param string $link_domain
     * @return AdsAd
     */
    public function setLinkDomain($link_domain)
    {
        $this->link_domain = $link_domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreviewLink()
    {
        return $this->preview_link;
    }

    /**
     * @param string $preview_link
     * @return AdsAd
     */
    public function setPreviewLink($preview_link)
    {
        $this->preview_link = $preview_link;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageSrc()
    {
        return $this->image_src;
    }

    /**
     * @param string $image_src
     * @return AdsAd
     */
    public function setImageSrc($image_src)
    {
        $this->image_src = $image_src;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageSrc2x()
    {
        return $this->image_src_2x;
    }

    /**
     * @param string $image_src_2x
     * @return AdsAd
     */
    public function setImageSrc2x($image_src_2x)
    {
        $this->image_src_2x = $image_src_2x;
        return $this;
    }
}