<?php

namespace VkSdk\Wall\Includes;

use lib\AutoFillObject;
use VkSdk\Photos\Includes\Photo;

/**
 * Class Link
 * @package VkSdk\Wall\Includes
 */
class Link
{

    use AutoFillObject;

    /**
     * @var LinkButton
     */
    private $button;

    /**
     * @var string
     */
    private $caption;

    /**
     * @var string
     */
    private $description;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $is_external;

    /**
     * @var Photo
     */
    private $photo;

    /**
     * @var string
     */
    private $preview_page;

    /**
     * @var string
     */
    private $preview_url;

    /**
     * @var LinkProduct
     */
    private $product;

    /**
     * @var LinkRating
     */
    private $rating;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $url;

    /**
     * @return LinkButton
     */
    public function getButton()
    {
        return $this->button;
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
     * Link caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
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
     * Link description
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
     * Information whether the link is external
     *
     * @return integer
     */
    public function getIsExternal()
    {
        return $this->is_external;
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
     * String ID of the page with article preview
     *
     * @return string
     */
    public function getPreviewPage()
    {
        return $this->preview_page;
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
     * URL of the page with article preview
     *
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->preview_url;
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
     * @return LinkProduct
     */
    public function getProduct()
    {
        return $this->product;
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
     * @return LinkRating
     */
    public function getRating()
    {
        return $this->rating;
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
     * Link title
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
     * Link URL
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

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'photo'   => 'VkSdk\Photos\Includes\Photo',
            'button'  => 'VkSdk\Wall\Includes\LinkButton',
            'product' => 'VkSdk\Wall\Includes\LinkProduct',
            'rating'  => 'VkSdk\Wall\Includes\LinkRating',
        ];
    }
}
