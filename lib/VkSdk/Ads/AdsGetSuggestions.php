<?php

namespace VkSdk\Ads;

use VkSdk\Ads\Includes\AdsGetSuggestionsResult;
use VkSdk\Includes\Request;

class AdsGetSuggestions extends Request
{

    private $section;
    private $ids = array();
    private $q;
    private $country;
    private $cities = array();
    private $lang;

    private $result = array();

    public function getResult()
    {
        return $this->result;
    }

    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function setQ($q)
    {
        $this->q = $q;
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
        $this->section = $section;
        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("Ads.getSuggestions");
        
        if ($this->section) {
            $this->setParameter("section", $this->section);
        }
        if ($this->ids) {
            $this->setParameter("ids", implode(",", $this->ids));
        }
        if ($this->q) {
            $this->setParameter("q", $this->q);
        }
        if ($this->country) {
            $this->setParameter("country", $this->country);
        }
        if ($this->cities) {
            $this->setParameter("cities", implode(",", $this->cities));
        }
        if ($this->lang) {
            $this->setParameter("lang", $this->lang);
        }

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (isset($json->response) && $json->response) {
            if ($this->section == "interests") {
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