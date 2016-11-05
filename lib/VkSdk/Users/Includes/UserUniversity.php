<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 05.11.16
 * Time: 13:54
 */

namespace VkSdk\Users\Includes;

/**
 * вуз, в котором учился пользователь
 *
 * Class UserUniversity
 * @package VkSdk\Users\Includes
 */
class UserUniversity
{
    /** @var int $id */
    private $id;
    /** @var int $country */
    private $country;
    /** @var int $city */
    private $city;
    /** @var string $name */
    private $name;
    /** @var int $faculty */
    private $faculty;
    /** @var string $faculty_name */
    private $faculty_name;
    /** @var int $chair */
    private $chair;
    /** @var string $chair_name */
    private $chair_name;
    /** @var int $graduation */
    private $graduation;
    /** @var string $education_form */
    private $education_form;
    /** @var string $education_status */
    private $education_status;

    /**
     * идентификатор университета;
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return UserUniversity
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * идентификатор страны, в которой расположен университет;
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
     * @return UserUniversity
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * идентификатор города, в котором расположен университет;
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
     * @return UserUniversity
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * наименование университета;
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
     * @return UserUniversity
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * идентификатор факультета;
     *
     * @return int
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * @param int $faculty
     *
     * @return UserUniversity
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;

        return $this;
    }

    /**
     * наименование факультета;
     *
     * @return string
     */
    public function getFacultyName()
    {
        return $this->faculty_name;
    }

    /**
     * @param string $faculty_name
     *
     * @return UserUniversity
     */
    public function setFacultyName($faculty_name)
    {
        $this->faculty_name = $faculty_name;

        return $this;
    }

    /**
     * идентификатор кафедры;
     *
     * @return int
     */
    public function getChair()
    {
        return $this->chair;
    }

    /**
     * @param int $chair
     *
     * @return UserUniversity
     */
    public function setChair($chair)
    {
        $this->chair = $chair;

        return $this;
    }

    /**
     * наименование кафедры;
     *
     * @return string
     */
    public function getChairName()
    {
        return $this->chair_name;
    }

    /**
     * @param string $chair_name
     *
     * @return UserUniversity
     */
    public function setChairName($chair_name)
    {
        $this->chair_name = $chair_name;

        return $this;
    }

    /**
     * год окончания обучения;
     *
     * @return int
     */
    public function getGraduation()
    {
        return $this->graduation;
    }

    /**
     * @param int $graduation
     *
     * @return UserUniversity
     */
    public function setGraduation($graduation)
    {
        $this->graduation = $graduation;

        return $this;
    }

    /**
     * форма обучения;
     *
     * @return string
     */
    public function getEducationForm()
    {
        return $this->education_form;
    }

    /**
     * @param string $education_form
     *
     * @return UserUniversity
     */
    public function setEducationForm($education_form)
    {
        $this->education_form = $education_form;

        return $this;
    }

    /**
     * статус (например, «Выпускник (специалист)»).
     *
     * @return string
     */
    public function getEducationStatus()
    {
        return $this->education_status;
    }

    /**
     * @param string $education_status
     *
     * @return UserUniversity
     */
    public function setEducationStatus($education_status)
    {
        $this->education_status = $education_status;

        return $this;
    }
}
