<?php

namespace VkSdk\Users;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserFull;

/**
 * Returns a list of users matching the search criteria.
 * Class UsersSearch
 * @package VkSdk\Users
 */
class UsersSearch extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var UserFull[]
     */
    private $items;

    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online';
     * see FieldsValues::FIELD_* constants
     *
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->vkarg_fields[] = $field;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $from_list
     */
    public function addFromList($from_list)
    {
        $this->vkarg_from_list[] = $from_list;

        return $this;
    }

    /**
     * @return $this
     *
     * @param UserFull $item
     */
    public function addItem(UserFull $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * Total number of available results
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of users to return.
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * @return UserFull[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "users.search";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Users\Includes\UserFull',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Minimum age.
     *
     * @return $this
     *
     * @param integer $age_from
     */
    public function setAgeFrom($age_from)
    {
        $this->vkarg_age_from = $age_from;

        return $this;
    }

    /**
     * Maximum age.
     *
     * @return $this
     *
     * @param integer $age_to
     */
    public function setAgeTo($age_to)
    {
        $this->vkarg_age_to = $age_to;

        return $this;
    }

    /**
     * Day of birth.
     *
     * @return $this
     *
     * @param integer $birth_day
     */
    public function setBirthDay($birth_day)
    {
        $this->vkarg_birth_day = $birth_day;

        return $this;
    }

    /**
     * Month of birth.
     *
     * @return $this
     *
     * @param integer $birth_month
     */
    public function setBirthMonth($birth_month)
    {
        $this->vkarg_birth_month = $birth_month;

        return $this;
    }

    /**
     * Year of birth.
     *
     * @return $this
     *
     * @param integer $birth_year
     */
    public function setBirthYear($birth_year)
    {
        $this->vkarg_birth_year = $birth_year;

        return $this;
    }

    /**
     * City ID.
     *
     * @return $this
     *
     * @param integer $city
     */
    public function setCity($city)
    {
        $this->vkarg_city = $city;

        return $this;
    }

    /**
     * Name of the company where users work.
     *
     * @return $this
     *
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->vkarg_company = $company;

        return $this;
    }

    /**
     * Country ID.
     *
     * @return $this
     *
     * @param integer $country
     */
    public function setCountry($country)
    {
        $this->vkarg_country = $country;

        return $this;
    }

    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online';
     * see FieldsValues::FIELD_* constants
     *
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->vkarg_fields = $fields;

        return $this;
    }

    /**
     * @return $this
     *
     * @param array $from_list
     */
    public function setFromList(array $from_list)
    {
        $this->vkarg_from_list = $from_list;

        return $this;
    }

    /**
     * ID of a community to search in communities.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * '1' — with photo only; '0' — all users
     *
     * @return $this
     *
     * @param boolean $has_photo
     */
    public function setHasPhoto($has_photo)
    {
        $this->vkarg_has_photo = $has_photo;

        return $this;
    }

    /**
     * City name in a string.
     *
     * @return $this
     *
     * @param string $hometown
     */
    public function setHometown($hometown)
    {
        $this->vkarg_hometown = $hometown;

        return $this;
    }

    /**
     * Users' interests.
     *
     * @return $this
     *
     * @param string $interests
     */
    public function setInterests($interests)
    {
        $this->vkarg_interests = $interests;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of users.
     *
     * @return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * '1' — online only; '0' — all users
     *
     * @return $this
     *
     * @param boolean $online
     */
    public function setOnline($online)
    {
        $this->vkarg_online = $online;

        return $this;
    }

    /**
     * Job position.
     *
     * @return $this
     *
     * @param string $position
     */
    public function setPosition($position)
    {
        $this->vkarg_position = $position;

        return $this;
    }

    /**
     * Search query string (e.g., 'Vasya Babich').
     * @return $this
     *
     * @param string $q
     */
    public function setQ($q)
    {
        $this->vkarg_q = $q;

        return $this;
    }

    /**
     * Users' religious affiliation.
     *
     * @return $this
     *
     * @param string $religion
     */
    public function setReligion($religion)
    {
        $this->vkarg_religion = $religion;

        return $this;
    }

    /**
     * ID of the school.
     *
     * @return $this
     *
     * @param integer $school
     */
    public function setSchool($school)
    {
        $this->vkarg_school = $school;

        return $this;
    }

    /**
     * ID of the city where users finished school.
     *
     * @return $this
     *
     * @param integer $school_city
     */
    public function setSchoolCity($school_city)
    {
        $this->vkarg_school_city = $school_city;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $school_class
     */
    public function setSchoolClass($school_class)
    {
        $this->vkarg_school_class = $school_class;

        return $this;
    }

    /**
     * ID of the country where users finished school.
     *
     * @return $this
     *
     * @param integer $school_country
     */
    public function setSchoolCountry($school_country)
    {
        $this->vkarg_school_country = $school_country;

        return $this;
    }

    /**
     * School graduation year.
     *
     * @return $this
     *
     * @param integer $school_year
     */
    public function setSchoolYear($school_year)
    {
        $this->vkarg_school_year = $school_year;

        return $this;
    }

    /**
     * '1' — female; '2' — male; '0' — any (default)
     * @return $this
     *
     * @param integer $sex
     */
    public function setSex($sex)
    {
        $this->vkarg_sex = $sex;

        return $this;
    }

    /**
     * Sort order:; '1' — by date registered; '0' — by rating
     * @return $this
     *
     * @param integer $sort
     */
    public function setSort($sort)
    {
        $this->vkarg_sort = $sort;

        return $this;
    }

    /**
     * Relationship status:; '1' — Not married; '2' — In a relationship; '3' — Engaged; '4' — Married; '5' — It's complicated; '6' — Actively searching; '7' — In love
     * @return $this
     *
     * @param integer $status
     */
    public function setStatus($status)
    {
        $this->vkarg_status = $status;

        return $this;
    }

    /**
     * ID of the institution of higher education.
     *
     * @return $this
     *
     * @param integer $university
     */
    public function setUniversity($university)
    {
        $this->vkarg_university = $university;

        return $this;
    }

    /**
     * Chair ID.
     *
     * @return $this
     *
     * @param integer $university_chair
     */
    public function setUniversityChair($university_chair)
    {
        $this->vkarg_university_chair = $university_chair;

        return $this;
    }

    /**
     * ID of the country where the user graduated.
     *
     * @return $this
     *
     * @param integer $university_country
     */
    public function setUniversityCountry($university_country)
    {
        $this->vkarg_university_country = $university_country;

        return $this;
    }

    /**
     * Faculty ID.
     *
     * @return $this
     *
     * @param integer $university_faculty
     */
    public function setUniversityFaculty($university_faculty)
    {
        $this->vkarg_university_faculty = $university_faculty;

        return $this;
    }

    /**
     * Year of graduation from an institution of higher education.
     *
     * @return $this
     *
     * @param integer $university_year
     */
    public function setUniversityYear($university_year)
    {
        $this->vkarg_university_year = $university_year;

		return $this;
	}
}
