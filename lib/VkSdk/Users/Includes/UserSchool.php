<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 05.11.16
 * Time: 13:32
 */

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;

/**
 * школа, в которой учился пользователь
 *
 * Class UserSchool
 * @package VkSdk\Users\Includes
 */
class UserSchool
{
    use AutoFillObject;

    /** школа */
    const TYPE_SCHOOL = 0;
    /** гимназия */
    const TYPE_HIGH_SCHOOL = 1;
    /** лицей */
    const TYPE_LYCEUM = 2;
    /** школа-интернат */
    const TYPE_BOARDING_SCHOOL = 3;
    /** школа вечерняя */
    const TYPE_SCHOOL_TIME = 4;
    /** школа музыкальная */
    const TYPE_MUSIC_SCHOOL = 5;
    /** школа спортивная */
    const TYPE_SPORTS_SCHOOL = 6;
    /** школа художественная */
    const TYPE_ART_SCHOOL = 7;
    /** колледж */
    const TYPE_COLLEGE = 8;
    /** профессиональный лицей */
    const TYPE_PROFESSIONAL_LYCEUM = 9;
    /** техникум */
    const TYPE_TECHNICAL_COLLEGE = 10;
    /** ПТУ */
    const TYPE_VOCATIONAL = 11;
    /** училище */
    const TYPE_SPECIALIZED_SCHOOL = 12;
    /** школа искусств */
    const TYPE_SCHOOL_OF_ARTS = 13;

    /** @var string $id */
    private $id;
    /** @var int $country */
    private $country;
    /** @var int $city */
    private $city;
    /** @var string $name */
    private $name;
    /** @var int $year_from */
    private $year_from;
    /** @var int $year_to */
    private $year_to;
    /** @var int $year_graduated */
    private $year_graduated;
    /** @var string $class */
    private $class;
    /** @var string $speciality */
    private $speciality;
    /** @var int $type */
    private $type;
    /** @var string $type_str */
    private $type_str;

    /**
     * идентификатор школы;
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return UserSchool
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * идентификатор страны, в которой расположена школа;
     *
     * @return int
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param int $country
     *
     * @return UserSchool
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * идентификатор города, в котором расположена школа;
     *
     * @return int
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param int $city
     *
     * @return UserSchool
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * наименование школы
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return UserSchool
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * год начала обучения;
     *
     * @return int
     */
    public function getYearFrom()
    {
        return $this->year_from;
    }

    /**
     * @param int $year_from
     *
     * @return UserSchool
     */
    public function setYearFrom($year_from)
    {
        $this->year_from = $year_from;

        return $this;
    }

    /**
     * год окончания обучения;
     *
     * @return int
     */
    public function getYearTo()
    {
        return $this->year_to;
    }

    /**
     * @param int $year_to
     *
     * @return UserSchool
     */
    public function setYearTo($year_to)
    {
        $this->year_to = $year_to;

        return $this;
    }

    /**
     * год выпуска;
     *
     * @return int
     */
    public function getYearGraduated()
    {
        return $this->year_graduated;
    }

    /**
     * @param int $year_graduated
     *
     * @return UserSchool
     */
    public function setYearGraduated($year_graduated)
    {
        $this->year_graduated = $year_graduated;

        return $this;
    }

    /**
     * буква класса;
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param string $class
     *
     * @return UserSchool
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * специализация;
     *
     * @return string
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * @param string $speciality
     *
     * @return UserSchool
     */
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;

        return $this;
    }

    /**
     * идентификатор типа;
     * см. константы TYPE_*
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     *
     * @return UserSchool
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * название типа.
     *
     * @return string
     */
    public function getTypeStr()
    {
        return $this->type_str;
    }

    /**
     * @param string $type_str
     *
     * @return UserSchool
     */
    public function setTypeStr($type_str)
    {
        $this->type_str = $type_str;

        return $this;
    }
}
