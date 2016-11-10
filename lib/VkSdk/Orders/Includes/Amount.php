<?php

namespace VkSdk\Orders\Includes;

use lib\AutoFillObject;

/**
 * Class Amount
 * @package VkSdk\Orders\Includes
 */
class Amount
{

    use AutoFillObject;

    /**
     * @var array
     */
    private $amounts;

    /**
     * @return array
     */
    public function getAmounts()
    {
        return $this->amounts;
    }

    /**
     * @return $this
     *
     * @param array $amounts
     */
    public function setAmounts(array $amounts)
    {
        $this->amounts = $amounts;

        return $this;
    }
}
