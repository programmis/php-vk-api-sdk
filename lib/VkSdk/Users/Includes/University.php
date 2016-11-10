<?php
namespace VkSdk\Users\Includes;

/**
 * Class University
 *
 * @package VkSdk\Users\Includes
 */
class University
{

    /**
     * @var integer
     */
    public $chair;

    /**
     * @var string
     */
    public $chair_name;

    /**
     * @var integer
     */
    public $city;

    /**
     * @var integer
     */
    public $country;

    /**
     * @var string
     */
    public $education_form;

    /**
     * @var string
     */
    public $education_status;

    /**
     * @var integer
     */
    public $faculty;

    /**
     * @var string
     */
    public $faculty_name;

    /**
     * @var integer
     */
    public $graduation;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * Chair ID
     *
     * @return integer
     */
    public function getChair()
    {
        return $this->chair;
    }

    /**
     * @return $this
     *
     * @param integer $chair
     */
    public function setChair($chair)
    {
        $this->chair = $chair;

        return $this;
    }

    /**
     * Chair name
     *
     * @return string
     */
    public function getChairName()
    {
        return $this->chair_name;
    }

    /**
     * @return $this
     *
     * @param string $chair_name
     */
    public function setChairName($chair_name)
    {
        $this->chair_name = $chair_name;

        return $this;
    }

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
     * Education form
     *
     * @return string
     */
    public function getEducationForm()
    {
        return $this->education_form;
    }

    /**
     * @return $this
     *
     * @param string $education_form
     */
    public function setEducationForm($education_form)
    {
        $this->education_form = $education_form;

        return $this;
    }

    /**
     * Education status
     *
     * @return string
     */
    public function getEducationStatus()
    {
        return $this->education_status;
    }

    /**
     * @return $this
     *
     * @param string $education_status
     */
    public function setEducationStatus($education_status)
    {
        $this->education_status = $education_status;

        return $this;
    }

    /**
     * Faculty ID
     *
     * @return integer
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * @return $this
     *
     * @param integer $faculty
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;

        return $this;
    }

    /**
     * Faculty name
     *
     * @return string
     */
    public function getFacultyName()
    {
        return $this->faculty_name;
    }

    /**
     * @return $this
     *
     * @param string $faculty_name
     */
    public function setFacultyName($faculty_name)
    {
        $this->faculty_name = $faculty_name;

        return $this;
    }

    /**
     * Graduation year
     *
     * @return integer
     */
    public function getGraduation()
    {
        return $this->graduation;
    }

    /**
     * @return $this
     *
     * @param integer $graduation
     */
    public function setGraduation($graduation)
    {
        $this->graduation = $graduation;

        return $this;
    }

    /**
     * University ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * University name
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
}
