<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 04.11.16
 * Time: 22:24
 */

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;

/**
 * информация о полях из раздела «Жизненная позиция».
 *
 * Class UserPersonal
 * @package VkSdk\Users\Includes
 */
class UserPersonal
{
    use AutoFillObject;

    /** коммунистические; */
    const POLITICAL_COMMUNIST = 1;
    /** социалистические; */
    const POLITICAL_SOCIALIST = 2;
    /** умеренные; */
    const POLITICAL_MODERATE = 3;
    /** либеральные; */
    const POLITICAL_LIBERAL = 4;
    /** консервативные; */
    const POLITICAL_CONSERVATIVE = 5;
    /** монархические; */
    const POLITICAL_MONARCHICAL = 6;
    /** ультраконсервативные; */
    const POLITICAL_ULTRACONSERVATIVE = 7;
    /** индифферентные; */
    const POLITICAL_INDIFFERENT = 8;
    /** либертарианские. */
    const POLITICAL_LIBERTARIAN = 9;

    /** ум и креативность; */
    const PEOPLE_MAIN_MIND = 1;
    /** доброта и честность; */
    const PEOPLE_MAIN_KINDNESS = 2;
    /** красота и здоровье; */
    const PEOPLE_MAIN_BEAUTY = 3;
    /** власть и богатство; */
    const PEOPLE_MAIN_POWER = 4;
    /** смелость и упорство; */
    const PEOPLE_MAIN_COURAGE = 5;
    /** юмор и жизнелюбие. */
    const PEOPLE_MAIN_HUMOR = 6;

    /** семья и дети; */
    const LIFE_MAIN_FAMILY = 1;
    /** карьера и деньги; */
    const LIFE_MAIN_CAREER = 2;
    /** развлечения и отдых; */
    const LIFE_MAIN_ENTERTAINMENT = 3;
    /** наука и исследования; */
    const LIFE_MAIN_SCIENCE = 4;
    /** совершенствование мира; */
    const LIFE_MAIN_PERFECTION = 5;
    /** саморазвитие; */
    const LIFE_MAIN_SELF_DEVELOPMENT = 6;
    /** красота и искусство; */
    const LIFE_MAIN_BEAUTY = 7;
    /** слава и влияние; */
    const LIFE_MAIN_GLORY = 8;

    /** резко негативное; */
    const SMOKING_SHARPLY_NEGATIVE = 1;
    /** негативное; */
    const SMOKING_NEGATIVE = 2;
    /** компромиссное; */
    const SMOKING_COMPROMISE = 3;
    /** нейтральное; */
    const SMOKING_NEUTRAL = 4;
    /** положительное. */
    const SMOKING_POSITIVE = 5;

    /** резко негативное; */
    const ALCOHOL_SHARPLY_NEGATIVE = 1;
    /** негативное; */
    const ALCOHOL_NEGATIVE = 2;
    /** компромиссное; */
    const ALCOHOL_COMPROMISE = 3;
    /** нейтральное; */
    const ALCOHOL_NEUTRAL = 4;
    /** положительное. */
    const ALCOHOL_POSITIVE = 5;

    /** @var int $political */
    private $political;
    /** @var array $langs */
    private $langs;
    /** @var string $religion */
    private $religion;
    /** @var string $inspired_by */
    private $inspired_by;
    /** @var int $people_main */
    private $people_main;
    /** @var int $life_main */
    private $life_main;
    /** @var int $smoking */
    private $smoking;
    /** @var int $alcohol */
    private $alcohol;

    /**
     * политические предпочтения.
     * см. POLITICAL_* константы
     *
     * @return int
     */
    public function getPolitical()
    {
        return $this->political;
    }

    /**
     * @param int $political
     *
     * @return UserPersonal
     */
    public function setPolitical($political)
    {
        $this->political = $political;

        return $this;
    }

    /**
     * языки.
     *
     * @return array
     */
    public function getLangs()
    {
        return $this->langs;
    }

    /**
     * @param array $langs
     *
     * @return UserPersonal
     */
    public function setLangs($langs)
    {
        $this->langs = $langs;

        return $this;
    }

    /**
     * мировоззрение.
     *
     * @return string
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * @param string $religion
     *
     * @return UserPersonal
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;

        return $this;
    }

    /**
     * источники вдохновения.
     *
     * @return string
     */
    public function getInspiredBy()
    {
        return $this->inspired_by;
    }

    /**
     * @param string $inspired_by
     *
     * @return UserPersonal
     */
    public function setInspiredBy($inspired_by)
    {
        $this->inspired_by = $inspired_by;

        return $this;
    }

    /**
     * главное в людях.
     * см. PEOPLE_MAIN_* константы
     *
     * @return int
     */
    public function getPeopleMain()
    {
        return $this->people_main;
    }

    /**
     * @param int $people_main
     *
     * @return UserPersonal
     */
    public function setPeopleMain($people_main)
    {
        $this->people_main = $people_main;

        return $this;
    }

    /**
     * главное в жизни
     * см. LIFE_MAIN_* константы
     *
     * @return int
     */
    public function getLifeMain()
    {
        return $this->life_main;
    }

    /**
     * @param int $life_main
     *
     * @return UserPersonal
     */
    public function setLifeMain($life_main)
    {
        $this->life_main = $life_main;

        return $this;
    }

    /**
     * отношение к курению.
     * см. SMOKING_* константы
     *
     * @return int
     */
    public function getSmoking()
    {
        return $this->smoking;
    }

    /**
     * @param int $smoking
     *
     * @return UserPersonal
     */
    public function setSmoking($smoking)
    {
        $this->smoking = $smoking;

        return $this;
    }

    /**
     * отношение к алкоголю
     * см. ALCOHOL_* константы
     *
     * @return int
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * @param int $alcohol
     *
     * @return UserPersonal
     */
    public function setAlcohol($alcohol)
    {
        $this->alcohol = $alcohol;

        return $this;
    }
}
