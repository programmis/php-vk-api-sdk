<?php
namespace VkSdk\Auth;

use VkSdk\Includes\Request;

/**
 * Allows to restore account access using a code received via SMS.; ; " This method is only available for apps with  access. "
 * Class AuthRestore
 *
 * @package VkSdk\Auth
 */
class AuthRestore extends Request
{

    /**
     * @var string
     */
    public $sid;

    /**
     * @var integer
     */
    public $success;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["phone"]);

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
        return "auth.restore";
    }

    /**
     * Parameter needed to grant access by code
     *
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * 1 if success
     *
     * @return integer
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * user phone number.
     *
     * @return $this
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->vkarg_phone = $phone;

        return $this;
    }
}
