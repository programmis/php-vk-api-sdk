<?php

namespace VkSdk\Account\Includes;

/**
 * Class PushConversations
 * @package VkSdk\Account\Includes
 */
class PushConversations
{
    /**
     * @var integer
     */
    public $count;

    /**
     * @var PushConversations[]
     */
    public $items;

    /**
     * Items count
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return PushConversations[]
     */
    public function getItems()
    {
        return $this->items;
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
