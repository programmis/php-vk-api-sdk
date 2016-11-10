<?php
namespace VkSdk\Orders\Includes;

/**
 * Class Amount
 *
 * @package VkSdk\Orders\Includes
 */
class Amount
{

    /**
     * @var array(array)
     */
    public $amounts;

    /**
     * @return array(array)[]
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
