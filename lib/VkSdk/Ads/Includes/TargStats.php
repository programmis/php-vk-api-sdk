<?php
namespace VkSdk\Ads\Includes;

/**
 * Class TargStats
 *
 * @package VkSdk\Ads\Includes
 */
class TargStats
{

    /**
     * @var integer
     */
    public $audience_count;

    /**
     * @var number
     */
    public $recommended_cpc;

    /**
     * @var number
     */
    public $recommended_cpm;

    /**
     * Audience
     *
     * @return integer
     */
    public function getAudienceCount()
    {
        return $this->audience_count;
    }

    /**
     * @return $this
     *
     * @param integer $audience_count
     */
    public function setAudienceCount($audience_count)
    {
        $this->audience_count = $audience_count;

        return $this;
    }

    /**
     * Recommended CPC value
     *
     * @return number
     */
    public function getRecommendedCpc()
    {
        return $this->recommended_cpc;
    }

    /**
     * @return $this
     *
     * @param number $recommended_cpc
     */
    public function setRecommendedCpc(number $recommended_cpc)
    {
        $this->recommended_cpc = $recommended_cpc;

        return $this;
    }

    /**
     * Recommended CPM value
     *
     * @return number
     */
    public function getRecommendedCpm()
    {
        return $this->recommended_cpm;
    }

    /**
     * @return $this
     *
     * @param number $recommended_cpm
     */
    public function setRecommendedCpm(number $recommended_cpm)
    {
        $this->recommended_cpm = $recommended_cpm;

        return $this;
    }
}
