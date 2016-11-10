<?php
namespace VkSdk\Account;

use VkSdk\Includes\Request;

/**
 * Allows to edit the current account info.
 * Class AccountSetInfo
 *
 * @package VkSdk\Account
 */
class AccountSetInfo extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

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
     * @inheritdoc
     */
    public function getMethod()
    {
        return "account.setInfo";
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
     * Setting name.
     *
     * @return $this
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->vkarg_name = $name;

        return $this;
    }

    /**
     * Setting value.
     *
     * @return $this
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->vkarg_value = $value;

        return $this;
    }
}
