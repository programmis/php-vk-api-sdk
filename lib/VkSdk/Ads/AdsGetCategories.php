<?php

namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Returns a list of possible ad categories.
 * Class AdsGetCategories
 * @package VkSdk\Ads
 */
class AdsGetCategories extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "ads.getCategories";
    }

    /**
     * Language. The full list of supported languages is .
     *
     * @return $this
     *
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->vkarg_lang = $lang;

        return $this;
    }
}
