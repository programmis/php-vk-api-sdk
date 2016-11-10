<?php

namespace VkSdk\Users;

use VkSdk\Includes\Request;

/**
 * Reports (submits a complain about) a user.;
 * Class UsersReport
 * @package VkSdk\Users
 */
class UsersReport extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["user_id", "type"]);

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
     * @inheritdoc
     */
    public function getMethod()
    {
        return "users.report";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Comment describing the complaint.
     *
     * @return $this
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->vkarg_comment = $comment;

        return $this;
    }

    /**
     * Type of complaint:; 'porn' – pornography; 'spam' – spamming; 'insult' – abusive behavior; 'advertisment' – disruptive advertisements
     *
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->vkarg_type = $type;

        return $this;
    }

    /**
     * ID of the user about whom a complaint is being made.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
