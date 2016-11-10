<?php
namespace VkSdk\Users\Includes;

/**
 * Class School
 *
 * @package VkSdk\Users\Includes
 */
class School
{

    /**
     * @var integer
     */
    public $city;

    /**
     * @var string
     */
    public $class;

    /**
     * @var integer
     */
    public $country;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var integer
     */
    public $type;

    /**
     * @var string
     */
    public $type_str;

    /**
     * @var integer
     */
    public $year_from;

    /**
     * @var integer
     */
    public $year_graduated;

    /**
     * @var integer
     */
    public $year_to;

    /**
     * City ID
     *
     * @return integer
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return $this
     *
     * @param integer $city
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * School class letter
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @return $this
     *
     * @param string $class
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Country ID
     *
     * @return integer
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return $this
     *
     * @param integer $country
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * School ID
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * School name
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
     * School type ID
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     *
     * @param integer $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * School type name
     *
     * @return string
     */
    public function getTypeStr()
    {
        return $this->type_str;
    }

    /**
     * @return $this
     *
     * @param string $type_str
     */
    public function setTypeStr($type_str)
    {
        $this->type_str = $type_str;

        return $this;
    }

    /**
     * Year the user started to study
     *
     * @return integer
     */
    public function getYearFrom()
    {
        return $this->year_from;
    }

    /**
     * @return $this
     *
     * @param integer $year_from
     */
    public function setYearFrom($year_from)
    {
        $this->year_from = $year_from;

        return $this;
    }

    /**
     * Graduation year
     *
     * @return integer
     */
    public function getYearGraduated()
    {
        return $this->year_graduated;
    }

    /**
     * @return $this
     *
     * @param integer $year_graduated
     */
    public function setYearGraduated($year_graduated)
    {
        $this->year_graduated = $year_graduated;

        return $this;
    }

    /**
     * Year the user finished to study
     *
     * @return integer
     */
    public function getYearTo()
    {
        return $this->year_to;
    }

    /**
     * @return $this
     *
     * @param integer $year_to
     */
    public function setYearTo($year_to)
    {
        $this->year_to = $year_to;

        return $this;
    }
}
