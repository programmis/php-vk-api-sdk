<?php

namespace VkSdk\Video\Includes;

use lib\AutoFillObject;

/**
 * Class CatBlock
 * @package VkSdk\Video\Includes
 */
class CatBlock
{

    use AutoFillObject;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_hide;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var CatElement[]
     */
    private $items;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $next;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $view;

    /**
     * @return $this
     *
     * @param CatElement $item
     */
    public function addItem(CatElement $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Information whether the block can be hidden
     *
     * @return integer
     */
    public function getCanHide()
    {
        return $this->can_hide;
    }

    /**
     * @return $this
     *
     * @param integer $can_hide
     */
    public function setCanHide($can_hide)
    {
        $this->can_hide = $can_hide;

        return $this;
    }

    /**
     * Block ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return CatElement[]
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

    /**
     * Block name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * New value for _from_ parameter
     *
     * @return string
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @return $this
     *
     * @param string $next
     */
    public function setNext($next)
    {
        $this->next = $next;

        return $this;
    }

    /**
     * Block type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Type of view
     *
     * @return string
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @return $this
     *
     * @param string $view
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Video\Includes\CatElement',
                'method' => 'addItem'
            ],
        ];
    }
}
