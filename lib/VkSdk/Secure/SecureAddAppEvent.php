<?php

namespace VkSdk\Secure;

use VkSdk\Includes\Request;

/**
 * Adds user activity information to an application
 * Class SecureAddAppEvent
 * @package VkSdk\Secure
 */
class SecureAddAppEvent extends Request
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
        $this->setRequiredParams(["user_id", "activity_id"]);

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
        return "secure.addAppEvent";
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
     * there are 2 default activities: ; * 1 – level. Works similar to ;; * 2 – points, saves points amount; Any other value is for saving completed missions
     *
     * @return $this
     *
     * @param integer $activity_id
     */
    public function setActivityId($activity_id)
    {
        $this->vkarg_activity_id = $activity_id;

        return $this;
    }

    /**
     * ID of a user to save the data
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

    /**
     * depends on activity_id:; * 1 – number, current level number;; * 2 – number, current user's points amount; ; Any other value is ignored
     *
     * @return $this
     *
     * @param integer $value
     */
    public function setValue($value)
    {
        $this->vkarg_value = $value;

        return $this;
    }
}
