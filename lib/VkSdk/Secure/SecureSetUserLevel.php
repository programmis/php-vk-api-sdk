<?php

namespace VkSdk\Secure;

use VkSdk\Includes\Request;

/**
 * Sets user game level in the application which can be seen by his/her friends.
 *
 * Class SecureSetUserLevel
 * @package VkSdk\Secure
 */
class SecureSetUserLevel extends Request
{
    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * @return $this
     *
     * @param string $level
     */
    public function addLevel($level)
    {
        $this->vkarg_levels[] = $level;

        return $this;
    }

    /**
     * result in $this->getResponse();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->response = $json->response;

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
        return "secure.setUserLevel";
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
     * level value.
     *
     * @return $this
     *
     * @param integer $level
     */
    public function setLevel($level)
    {
        $this->vkarg_level = $level;

        return $this;
    }

    /**
     * @return $this
     *
     * @param array $levels
     */
    public function setLevels(array $levels)
    {
        $this->vkarg_levels = $levels;

        return $this;
    }

    /**
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
