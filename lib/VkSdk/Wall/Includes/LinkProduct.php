<?php
namespace VkSdk\Wall\Includes;

use lib\AutoFillObject;
use VkSdk\Market\Includes\Price;

/**
 * Class LinkProduct
 *
 * @package VkSdk\Wall\Includes
 */
class LinkProduct
{

    use AutoFillObject;

    /**
     * @var Price
     */
    public $price;

    /**
     * @return Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return $this
     *
     * @param Price $price
     */
    public function setPrice(Price $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'price' => 'VkSdk\Market\Includes\Price',
        ];
    }
}
