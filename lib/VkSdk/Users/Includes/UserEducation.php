<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 04.11.16
 * Time: 21:32
 */

namespace VkSdk\Users\Includes;

/**
 * информация о высшем учебном заведении пользователя.
 *
 * Class UserEducation
 * @package VkSdk\Users\Includes
 */
class UserEducation
{
    /** @var int $university */
    private $university;
    /** @var string $university_name */
    private $university_name;
    /** @var int $faculty */
    private $faculty;
    /** @var string $faculty_name */
    private $faculty_name;
    /** @var int $graduation */
    private $graduation;

    /**
     * идентификатор университета;
     *
     * @return int
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * @param int $university
     *
     * @return UserEducation
     */
    public function setUniversity($university)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * название университета;
     *
     * @return string
     */
    public function getUniversityName()
    {
        return $this->university_name;
    }

    /**
     * @param string $university_name
     *
     * @return UserEducation
     */
    public function setUniversityName($university_name)
    {
        $this->university_name = $university_name;

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
     * @return UserEducation
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;

        return $this;
    }

    /**
     * название факультета;
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
     * @return UserEducation
     */
    public function setFacultyName($faculty_name)
    {
        $this->faculty_name = $faculty_name;

        return $this;
    }

    /**
     * год окончания.
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
     * @return UserEducation
     */
    public function setGraduation($graduation)
    {
        $this->graduation = $graduation;

        return $this;
    }
}
