<?php

namespace VkSdk\Base;

use lib\AutoFillObject;
use VkSdk\Photos\Includes\Photo;

/**
 * Class Link
 * @package VkSdk\Base
 */
class Link
{
    use AutoFillObject;

    /**
     * @var LinkApplication
     */
    public $application;

    /**
     * @var LinkButton
     */
    public $button;

    /**
     * @var string
     */
    public $caption;

    /**
     * @var string
     */
    public $description;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $is_external;

    /**
     * @var Photo
     */
    public $photo;

    /**
     * @var string
     */
    public $preview_page;

    /**
     * @var string
     */
    public $preview_url;

    /**
     * @var LinkProduct
     */
    public $product;

    /**
     * @var LinkRating
     */
    public $rating;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;

    /**
     * @return LinkApplication
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @return LinkButton
     */
    public function getButton()
    {
        return $this->button;
    }

    /**
     * Link caption
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Link description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Information whether the link is external
     * @return integer
     */
    public function getIsExternal()
    {
        return $this->is_external;
    }

    /**
     * @return Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * String ID of the page with article preview
     * @return string
     */
    public function getPreviewPage()
    {
        return $this->preview_page;
    }

    /**
     * URL of the page with article preview
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->preview_url;
    }

    /**
     * @return LinkProduct
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return LinkRating
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Link title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Link URL
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'photo'       => 'VkSdk\Photos\Includes\Photo',
            'button'      => 'VkSdk\Base\LinkButton',
            'product'     => 'VkSdk\Base\LinkProduct',
            'rating'      => 'VkSdk\Base\LinkRating',
            'application' => 'VkSdk\Base\LinkApplication',
        ];
    }

    /**
     * @return $this
     *
     * @param LinkApplication $application
     */
    public function setApplication(LinkApplication $application)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * @return $this
     *
     * @param LinkButton $button
     */
    public function setButton(LinkButton $button)
    {
        $this->button = $button;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
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
     * @return $this
     *
     * @param integer $is_external
     */
    public function setIsExternal($is_external)
    {
        $this->is_external = $is_external;

        return $this;
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
     * @return $this
     *
     * @param string $preview_page
     */
    public function setPreviewPage($preview_page)
    {
        $this->preview_page = $preview_page;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $preview_url
     */
    public function setPreviewUrl($preview_url)
    {
        $this->preview_url = $preview_url;

        return $this;
    }

    /**
     * @return $this
     *
     * @param LinkProduct $product
     */
    public function setProduct(LinkProduct $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return $this
     *
     * @param LinkRating $rating
     */
    public function setRating(LinkRating $rating)
    {
        $this->rating = $rating;

        return $this;
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
