<?php


namespace VkSdk\Ads\Includes;

class AdsGetSuggestionsResult
{

    private $id;
    private $name;
    private $desc;
    private $type;
    private $parent;

    public function getType()
    {
        return $this->type;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setDesc($desc)
    {
        $this->desc = $desc;
        return $this;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}