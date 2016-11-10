<?php
namespace VkSdk\Account\Includes;

/**
 * Class Info
 *
 * @package VkSdk\Account\Includes
 */
class Info
{

    /**
     * @var string
     */
    public $country;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $https_required;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $intro;

    /**
     * @var integer
     */
    public $lang;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $no_wall_replies;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $own_posts_default;

    /**
     * Country code
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return $this
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Information whether HTTPS-only is enabled
     *
     * @return integer
     */
    public function getHttpsRequired()
    {
        return $this->https_required;
    }

    /**
     * @return $this
     *
     * @param integer $https_required
     */
    public function setHttpsRequired($https_required)
    {
        $this->https_required = $https_required;

        return $this;
    }

    /**
     * Information whether user has been processed intro
     *
     * @return integer
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * @return $this
     *
     * @param integer $intro
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Language ID
     *
     * @return integer
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @return $this
     *
     * @param integer $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Information whether wall comments should be hidden
     *
     * @return integer
     */
    public function getNoWallReplies()
    {
        return $this->no_wall_replies;
    }

    /**
     * @return $this
     *
     * @param integer $no_wall_replies
     */
    public function setNoWallReplies($no_wall_replies)
    {
        $this->no_wall_replies = $no_wall_replies;

        return $this;
    }

    /**
     * Information whether only owners posts should be shown
     *
     * @return integer
     */
    public function getOwnPostsDefault()
    {
        return $this->own_posts_default;
    }

    /**
     * @return $this
     *
     * @param integer $own_posts_default
     */
    public function setOwnPostsDefault($own_posts_default)
    {
        $this->own_posts_default = $own_posts_default;

        return $this;
    }
}
