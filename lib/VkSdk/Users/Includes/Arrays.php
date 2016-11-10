<?php
namespace VkSdk\Users\Includes;

/**
 * Class Arrays
 *
 * @package VkSdk\Users\Includes
 */
class Arrays
{

    /**
     * @var integer
     */
    public $count;

    /**
     * @var array(array)
     */
    public $items;

    /**
     * Users number
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
     * @return array(array)[]
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
