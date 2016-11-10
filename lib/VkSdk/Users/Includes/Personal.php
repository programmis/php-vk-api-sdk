<?php
namespace VkSdk\Users\Includes;

/**
 * Class Personal
 *
 * @package VkSdk\Users\Includes
 */
class Personal
{

    /**
     * @var integer
     */
    public $alcohol;

    /**
     * @var string
     */
    public $inspired_by;

    /**
     * @var array(array)
     */
    public $langs;

    /**
     * @var integer
     */
    public $life_main;

    /**
     * @var integer
     */
    public $people_main;

    /**
     * @var integer
     */
    public $political;

    /**
     * @var string
     */
    public $religion;

    /**
     * @var integer
     */
    public $smoking;

    /**
     * User's views on alcohol
     *
     * @return integer
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * @return $this
     *
     * @param integer $alcohol
     */
    public function setAlcohol($alcohol)
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    /**
     * User's inspired by
     *
     * @return string
     */
    public function getInspiredBy()
    {
        return $this->inspired_by;
    }

    /**
     * @return $this
     *
     * @param string $inspired_by
     */
    public function setInspiredBy($inspired_by)
    {
        $this->inspired_by = $inspired_by;

        return $this;
    }

    /**
     * @return array(array)[]
     */
    public function getLangs()
    {
        return $this->langs;
    }

    /**
     * @return $this
     *
     * @param array $langs
     */
    public function setLangs(array $langs)
    {
        $this->langs = $langs;

        return $this;
    }

    /**
     * User's personal priority in life
     *
     * @return integer
     */
    public function getLifeMain()
    {
        return $this->life_main;
    }

    /**
     * @return $this
     *
     * @param integer $life_main
     */
    public function setLifeMain($life_main)
    {
        $this->life_main = $life_main;

        return $this;
    }

    /**
     * User's personal priority in people
     *
     * @return integer
     */
    public function getPeopleMain()
    {
        return $this->people_main;
    }

    /**
     * @return $this
     *
     * @param integer $people_main
     */
    public function setPeopleMain($people_main)
    {
        $this->people_main = $people_main;

        return $this;
    }

    /**
     * User's political views
     *
     * @return integer
     */
    public function getPolitical()
    {
        return $this->political;
    }

    /**
     * @return $this
     *
     * @param integer $political
     */
    public function setPolitical($political)
    {
        $this->political = $political;

        return $this;
    }

    /**
     * User's religion
     *
     * @return string
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * @return $this
     *
     * @param string $religion
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;

        return $this;
    }

    /**
     * User's views on smoking
     *
     * @return integer
     */
    public function getSmoking()
    {
        return $this->smoking;
    }

    /**
     * @return $this
     *
     * @param integer $smoking
     */
    public function setSmoking($smoking)
    {
        $this->smoking = $smoking;

        return $this;
    }
}
