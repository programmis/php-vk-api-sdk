<?php

namespace VkSdk\Groups\Includes;

use lib\AutoFillObject;
use VkSdk\Market\Includes\Currency;

/**
 * Class MarketInfo
 * @package VkSdk\Groups\Includes
 */
class MarketInfo
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $contact_id;

    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var string
     */
    private $currency_text;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $enabled;

    /**
     * @var integer
     */
    private $main_album_id;

    /**
     * @var integer
     */
    private $price_max;

    /**
     * @var integer
     */
    private $price_min;

    /**
     * Contact person ID
     *
     * @return integer
     */
    public function getContactId()
    {
        return $this->contact_id;
    }

    /**
     * @return $this
     *
     * @param integer $contact_id
     */
    public function setContactId($contact_id)
    {
        $this->contact_id = $contact_id;

        return $this;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return $this
     *
     * @param Currency $currency
     */
    public function setCurrency(Currency $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Currency name
     *
     * @return string
     */
    public function getCurrencyText()
    {
        return $this->currency_text;
    }

    /**
     * @return $this
     *
     * @param string $currency_text
     */
    public function setCurrencyText($currency_text)
    {
        $this->currency_text = $currency_text;

        return $this;
    }

    /**
     * Information whether the market is enabled
     *
     * @return integer
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @return $this
     *
     * @param integer $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Main market album ID
     *
     * @return integer
     */
    public function getMainAlbumId()
    {
        return $this->main_album_id;
    }

    /**
     * @return $this
     *
     * @param integer $main_album_id
     */
    public function setMainAlbumId($main_album_id)
    {
        $this->main_album_id = $main_album_id;

        return $this;
    }

    /**
     * Maximum price
     *
     * @return integer
     */
    public function getPriceMax()
    {
        return $this->price_max;
    }

    /**
     * @return $this
     *
     * @param integer $price_max
     */
    public function setPriceMax($price_max)
    {
        $this->price_max = $price_max;

        return $this;
    }

    /**
     * Minimum price
     *
     * @return integer
     */
    public function getPriceMin()
    {
        return $this->price_min;
    }

    /**
     * @return $this
     *
     * @param integer $price_min
     */
    public function setPriceMin($price_min)
    {
        $this->price_min = $price_min;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'currency' => 'VkSdk\Market\Includes\Currency',
        ];
    }
}
