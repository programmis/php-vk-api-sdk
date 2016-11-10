<?php
namespace VkSdk\Wall\Includes;

/**
 * Class LinkRating
 *
 * @package VkSdk\Wall\Includes
 */
class LinkRating
{

    /**
     * @var integer
     */
    public $reviews_count;

    /**
     * @var number
     */
    public $stars;

    /**
     * Count of reviews
     *
     * @return integer
     */
    public function getReviewsCount()
    {
        return $this->reviews_count;
    }

    /**
     * @return $this
     *
     * @param integer $reviews_count
     */
    public function setReviewsCount($reviews_count)
    {
        $this->reviews_count = $reviews_count;

        return $this;
    }

    /**
     * Count of stars
     *
     * @return number
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @return $this
     *
     * @param number $stars
     */
    public function setStars(number $stars)
    {
        $this->stars = $stars;

        return $this;
    }
}
