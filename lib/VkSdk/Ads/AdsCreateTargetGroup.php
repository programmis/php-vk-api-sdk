<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 14.06.16
 * Time: 21:47
 */

namespace VkSdk\Ads;


use VkSdk\Includes\Request;

class AdsCreateTargetGroup extends Request
{
    private $id;
    private $pixel;

    public function getId()
    {
        return $this->id;
    }

    public function getPixel()
    {
        return $this->pixel;
    }

    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;
        return $this;
    }

    public function setName($name)
    {
        $this->vkarg_name = $name;
        return $this;
    }

    public function doRequest()
    {
        $this->setRequiredParams(['account_id', 'name']);

        $this->setMethod("ads.createTargetGroup");

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
            isset($json->response) && $json->response &&
            isset($json->response->id) && $json->response->id
        ) {
            $this->id = $json->response->id;
            $this->pixel = $json->response->pixel;

            return true;
        }

        return false;
    }
}