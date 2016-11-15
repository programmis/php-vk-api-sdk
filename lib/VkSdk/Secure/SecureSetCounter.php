<?php

namespace VkSdk\Secure;

use VkSdk\Includes\Request;

/**
 * Sets a counter which is shown to the user in bold in the left menu.
 *
 * Class SecureSetCounter
 * @package VkSdk\Secure
 */
class SecureSetCounter extends Request
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
     * @param string $counter
     */
    public function addCounter($counter)
    {
        $this->vkarg_counters[] = $counter;

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
        return "secure.setCounter";
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
     * counter value.
     *
     * @return $this
     *
     * @param integer $counter
     */
    public function setCounter($counter)
    {
        $this->vkarg_counter = $counter;

        return $this;
    }

    /**
     * @return $this
     *
     * @param array $counters
     */
    public function setCounters(array $counters)
    {
        $this->vkarg_counters = $counters;

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
