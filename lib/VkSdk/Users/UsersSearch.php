<?php

namespace VkSdk\Users;

use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserInfo;

class UsersSearch extends Request
{

    private $fields = array();
    private $q;
    private $sort;
    private $offset;
    private $count;
    private $city;
    private $country;
    private $hometown;
    private $university_country;
    private $university;
    private $university_year;
    private $university_faculty;
    private $university_chair;
    private $sex;
    private $status;
    private $age_from;
    private $age_to;
    private $birth_day;
    private $birth_month;
    private $birth_year;
    private $online;
    private $has_photo;
    private $school_country;
    private $school_city;
    private $school_class;
    private $school;
    private $school_year;
    private $religion;
    private $interests;
    private $company;
    private $position;
    private $group_id;

    private $users_info = array();

    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;
        return $this;
    }

    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    public function setInterests($interests)
    {
        $this->interests = $interests;
        return $this;
    }

    public function setReligion($religion)
    {
        $this->religion = $religion;
        return $this;
    }

    public function setSchoolYear($school_year)
    {
        $this->school_year = $school_year;
        return $this;
    }

    public function setSchool($school)
    {
        $this->school = $school;
        return $this;
    }

    public function setSchoolClass($school_class)
    {
        $this->school_class = $school_class;
        return $this;
    }

    public function setSchoolCity($school_city)
    {
        $this->school_city = $school_city;
        return $this;
    }

    public function setSchoolCountry($school_country)
    {
        $this->school_country = $school_country;
        return $this;
    }

    public function setHasPhoto($has_photo)
    {
        $this->has_photo = $has_photo;
        return $this;
    }

    public function setOnline($online)
    {
        $this->online = $online;
        return $this;
    }

    public function setBirthYear($birth_year)
    {
        $this->birth_year = $birth_year;
        return $this;
    }

    public function setBirthMonth($birth_month)
    {
        $this->birth_month = $birth_month;
        return $this;
    }

    public function setBirthDay($birth_day)
    {
        $this->birth_day = $birth_day;
        return $this;
    }

    public function setAgeTo($age_to)
    {
        $this->age_to = $age_to;
        return $this;
    }

    public function setAgeFrom($age_from)
    {
        $this->age_from = $age_from;
        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    public function setUniversityChair($university_chair)
    {
        $this->university_chair = $university_chair;
        return $this;
    }

    public function setUniversityFaculty($university_faculty)
    {
        $this->university_faculty = $university_faculty;
        return $this;
    }

    public function setUniversityYear($university_year)
    {
        $this->university_year = $university_year;
        return $this;
    }

    public function setUniversity($university)
    {
        $this->university = $university;
        return $this;
    }

    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    public function setUniversityCountry($university_country)
    {
        $this->university_country = $university_country;
        return $this;
    }

    public function setHomeTown($hometown)
    {
        $this->hometown = $hometown;
        return $this;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    public function setQ($q)
    {
        $this->q = $q;
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

        if ($this->q) {
            $this->setParameter("q", $this->q);
        }
        if ($this->sort) {
            $this->setParameter("sort", $this->sort);
        }
        if ($this->offset) {
            $this->setParameter("offset", $this->offset);
        }
        if ($this->count) {
            $this->setParameter("count", $this->count);
        }
        if ($this->city) {
            $this->setParameter("city", $this->city);
        }
        if ($this->country) {
            $this->setParameter("country", $this->country);
        }
        if ($this->hometown) {
            $this->setParameter("hometown", $this->hometown);
        }
        if ($this->university_country) {
            $this->setParameter("university_country", $this->university_country);
        }
        if ($this->university) {
            $this->setParameter("university", $this->university);
        }
        if ($this->university_year) {
            $this->setParameter("university_year", $this->university_year);
        }
        if ($this->university_faculty) {
            $this->setParameter("university_faculty", $this->university_faculty);
        }
        if ($this->university_chair) {
            $this->setParameter("university_chair", $this->university_chair);
        }
        if ($this->sex) {
            $this->setParameter("sex", $this->sex);
        }
        if ($this->status) {
            $this->setParameter("status", $this->status);
        }
        if ($this->age_from) {
            $this->setParameter("age_from", $this->age_from);
        }
        if ($this->age_to) {
            $this->setParameter("age_to", $this->age_to);
        }
        if ($this->birth_day) {
            $this->setParameter("birth_day", $this->birth_day);
        }
        if ($this->birth_month) {
            $this->setParameter("birth_month", $this->birth_month);
        }
        if ($this->birth_year) {
            $this->setParameter("birth_year", $this->birth_year);
        }
        if ($this->online) {
            $this->setParameter("online", $this->online);
        }
        if ($this->has_photo) {
            $this->setParameter("has_photo", $this->has_photo);
        }
        if ($this->school_country) {
            $this->setParameter("school_country", $this->school_country);
        }
        if ($this->school_city) {
            $this->setParameter("school_city", $this->school_city);
        }
        if ($this->school_class) {
            $this->setParameter("school_class", $this->school_class);
        }
        if ($this->school) {
            $this->setParameter("school", $this->school);
        }
        if ($this->school_year) {
            $this->setParameter("school_year", $this->school_year);
        }
        if ($this->religion) {
            $this->setParameter("religion", $this->religion);
        }
        if ($this->interests) {
            $this->setParameter("interests", $this->interests);
        }
        if ($this->company) {
            $this->setParameter("company", $this->company);
        }
        if ($this->position) {
            $this->setParameter("position", $this->position);
        }
        if ($this->group_id) {
            $this->setParameter("group_id", $this->group_id);
        }
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