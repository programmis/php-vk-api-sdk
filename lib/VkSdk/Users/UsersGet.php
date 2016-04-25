<?php

namespace VkSdk\Users;

use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserInfo;

class UsersGet extends Request
{

    private $user_ids = array();
    private $fields = array();

    private $users_info = array();

    public function getUsersInfo()
    {
        return $this->users_info;
    }

    public function setUserId($user_ids)
    {
        if (is_array($user_ids)) {
            $this->user_ids = array_merge($this->user_ids, $user_ids);
        } else {
            $this->user_ids[] = $user_ids;
        }

        return $this;
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
        $this->setMethod("users.get");

        if ($this->user_ids) {
            $this->setParameter("user_ids", implode(",", $this->user_ids));
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

        if (isset($json->response) && $json->response) {
            foreach ($json->response as $key => $ui) {
                $this->users_info[$key] = new UserInfo();
                $this->users_info[$key]->setId($ui->id);
                $this->users_info[$key]->setFirstName($ui->first_name);
                $this->users_info[$key]->setLastName($ui->last_name);
                if (isset($ui->sex)) {
                    $this->users_info[$key]->setSex($ui->sex);
                }
            }

            return true;
        }

        return false;
    }

}