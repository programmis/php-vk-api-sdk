<?php

namespace VkSdk\Users;

use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserInfo;

class UsersSearch extends Request
{

    private $fields = [];
    private $count;

    private $users_info = [];

    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;
        return $this;
    }

    public function setPosition($position)
    {
        $this->vkarg_position = $position;
        return $this;
    }

    public function setCompany($company)
    {
        $this->vkarg_company = $company;
        return $this;
    }

    public function setInterests($interests)
    {
        $this->vkarg_interests = $interests;
        return $this;
    }

    public function setReligion($religion)
    {
        $this->vkarg_religion = $religion;
        return $this;
    }

    public function setSchoolYear($school_year)
    {
        $this->vkarg_school_year = $school_year;
        return $this;
    }

    public function setSchool($school)
    {
        $this->vkarg_school = $school;
        return $this;
    }

    public function setSchoolClass($school_class)
    {
        $this->vkarg_school_class = $school_class;
        return $this;
    }

    public function setSchoolCity($school_city)
    {
        $this->vkarg_school_city = $school_city;
        return $this;
    }

    public function setSchoolCountry($school_country)
    {
        $this->vkarg_school_country = $school_country;
        return $this;
    }

    public function setHasPhoto($has_photo)
    {
        $this->vkarg_has_photo = $has_photo;
        return $this;
    }

    public function setOnline($online)
    {
        $this->vkarg_online = $online;
        return $this;
    }

    public function setBirthYear($birth_year)
    {
        $this->vkarg_birth_year = $birth_year;
        return $this;
    }

    public function setBirthMonth($birth_month)
    {
        $this->vkarg_birth_month = $birth_month;
        return $this;
    }

    public function setBirthDay($birth_day)
    {
        $this->vkarg_birth_day = $birth_day;
        return $this;
    }

    public function setAgeTo($age_to)
    {
        $this->vkarg_age_to = $age_to;
        return $this;
    }

    public function setAgeFrom($age_from)
    {
        $this->vkarg_age_from = $age_from;
        return $this;
    }

    public function setStatus($status)
    {
        $this->vkarg_status = $status;
        return $this;
    }

    public function setSex($sex)
    {
        $this->vkarg_sex = $sex;
        return $this;
    }

    public function setUniversityChair($university_chair)
    {
        $this->vkarg_university_chair = $university_chair;
        return $this;
    }

    public function setUniversityFaculty($university_faculty)
    {
        $this->vkarg_university_faculty = $university_faculty;
        return $this;
    }

    public function setUniversityYear($university_year)
    {
        $this->vkarg_university_year = $university_year;
        return $this;
    }

    public function setUniversity($university)
    {
        $this->vkarg_university = $university;
        return $this;
    }

    public function setCount($count)
    {
        $this->vkarg_count = $count;
        return $this;
    }

    public function setUniversityCountry($university_country)
    {
        $this->vkarg_university_country = $university_country;
        return $this;
    }

    public function setHomeTown($hometown)
    {
        $this->vkarg_hometown = $hometown;
        return $this;
    }

    public function setCountry($country)
    {
        $this->vkarg_country = $country;
        return $this;
    }

    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;
        return $this;
    }

    public function setCity($city)
    {
        $this->vkarg_city = $city;
        return $this;
    }

    public function setSort($sort)
    {
        $this->vkarg_sort = $sort;
        return $this;
    }

    public function setQ($q)
    {
        $this->vkarg_q = $q;
        return $this;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function getUsersInfo()
    {
        return $this->users_info;
    }

    public function setField($field)
    {
        if (is_array($field)) {
            $this->fields = array_merge($this->fields, $field);
        } else {
            $this->fields[] = $field;
        }

        return $this;
    }

    public function doRequest()
    {
        $this->setMethod("users.search");

        if ($this->fields) {
            $this->setParameter("fields", implode(",", $this->fields));
        }

        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (
            isset($json->response) && $json->response &&
            isset($json->response->items) && $json->response->items
        ) {
            $this->count = $json->response->count;

            foreach ($json->response->items as $key => $ui) {
                $this->users_info[$key] = new UserInfo();
                $this->users_info[$key]->setId($ui->id);
                $this->users_info[$key]->setFirstName($ui->first_name);
                $this->users_info[$key]->setLastName($ui->last_name);
                if (isset($ui->sex)) {
                    $this->users_info[$key]->setSex($ui->sex);
                }
                if (isset($ui->last_seen) && isset($ui->last_seen->time) && isset($ui->last_seen->platform)) {
                    $this->users_info[$key]->setLastSeen($ui->last_seen->time, $ui->last_seen->platform);
                }
            }

            return true;
        }

        return false;
    }

}