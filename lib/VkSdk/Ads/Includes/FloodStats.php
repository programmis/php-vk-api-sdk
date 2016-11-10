<?php

namespace VkSdk\Ads\Includes;

use lib\AutoFillObject;

/**
 * Class FloodStats
 * @package VkSdk\Ads\Includes
 */
class FloodStats
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $left;

    /**
     * @var integer
     */
    private $refresh;

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
