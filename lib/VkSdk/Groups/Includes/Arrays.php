<?php

namespace VkSdk\Groups\Includes;

use lib\AutoFillObject;

/**
 * Class Arrays
 * @package VkSdk\Groups\Includes
 */
class Arrays
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var array
     */
    private $items;

    /**
     * Communities number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return $this
     *
     * @param array $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }
}
