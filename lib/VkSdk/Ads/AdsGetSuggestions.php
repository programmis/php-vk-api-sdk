<?php

namespace VkSdk\Ads;

use VkSdk\Ads\Includes\AdsGetSuggestionsResult;
use VkSdk\Includes\Request;

class AdsGetSuggestions extends Request
{

    private $section;
    private $ids = [];
    private $cities = [];

    private $result = [];

    public function getResult()
    {
        return $this->result;
    }

    public function setLang($lang)
    {
        $this->vkarg_lang = $lang;
        return $this;
    }

    public function setCountry($country)
    {
        $this->vkarg_country = $country;
        return $this;
    }

    public function setQ($q)
    {
        $this->vkarg_q = $q;
        return $this;
    }

    public function addCity($city)
    {
        $this->cities[] = $city;
        return $this;
    }

    public function addId($id)
    {
        $this->ids[] = $id;
        return $this;
    }

    public function setSection($section)
    {
        $this->vkarg_section = $section;
        return $this;
    }
    
    public function getSection(){
        return $this->vkarg_section;
    }

    public function doRequest()
    {
        $this->setMethod("ads.getSuggestions");
        
        if ($this->ids) {
            $this->setParameter("ids", implode(",", $this->ids));
        }
        if ($this->cities) {
            $this->setParameter("cities", implode(",", $this->cities));
        }

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (isset($json->response) && $json->response) {
            if ($this->getSection() == "interests") {
                $this->result = $json->response;
            } else {
                foreach ($json->response as $key => $rsp) {
                    $this->result[$key] = new AdsGetSuggestionsResult();
                    if (isset($rsp->id)) {
                        $this->result[$key]->setId($rsp->id);
                    }
                    if (isset($rsp->name)) {
                        $this->result[$key]->setName($rsp->name);
                    }
                    if (isset($rsp->desc)) {
                        $this->result[$key]->setDesc($rsp->desc);
                    }
                    if (isset($rsp->type)) {
                        $this->result[$key]->setType($rsp->type);
                    }
                    if (isset($rsp->parent)) {
                        $this->result[$key]->setParent($rsp->parent);
                    }
                }
            }
            return true;
        }

        return false;
    }

}