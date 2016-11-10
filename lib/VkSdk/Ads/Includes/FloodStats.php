<?php
namespace VkSdk\Ads\Includes;

/**
 * Class FloodStats
 *
 * @package VkSdk\Ads\Includes
 */
class FloodStats
{

    /**
     * @var integer
     */
    public $left;

    /**
     * @var integer
     */
    public $refresh;

    /**
     * Requests left
     *
     * @return integer
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @return $this
     *
     * @param integer $left
     */
    public function setLeft($left)
    {
        $this->left = $left;

        return $this;
    }

    /**
     * Time to refresh in seconds
     *
     * @return integer
     */
    public function getRefresh()
    {
        return $this->refresh;
    }

    /**
     * @return $this
     *
     * @param integer $refresh
     */
    public function setRefresh($refresh)
    {
        $this->refresh = $refresh;

        return $this;
    }
}
