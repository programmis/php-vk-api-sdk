<?php

namespace VkSdk\Base;

use lib\AutoFillObject;

/**
 * Class LinkApplication
 * @package VkSdk\Base
 */
class LinkApplication
{
    use AutoFillObject;

    /**
     * @var number
     */
    public $app_id;

    /**
     * @var LinkApplicationStore
     */
    public $store;

    /**
     * Application Id
     * @return number
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * @return LinkApplicationStore
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'store' => 'VkSdk\Base\LinkApplicationStore',
        ];
    }

    /**
     * @return $this
     *
     * @param number $app_id
     */
    public function setAppId(number $app_id)
    {
        $this->app_id = $app_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param LinkApplicationStore $store
     */
    public function setStore(LinkApplicationStore $store)
    {
        $this->store = $store;

        return $this;
    }
}
