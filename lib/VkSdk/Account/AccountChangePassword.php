<?php

namespace VkSdk\Account;

use VkSdk\Includes\Request;

/**
 * Changes a user password after access is
 * successfully restored with the  method.
 *
 * Class AccountChangePassword
 * @package VkSdk\Account
 */
class AccountChangePassword extends Request
{
    /**
     * @var string
     */
    private $secret;

    /**
     * @var string
     */
    private $token;

    /**
     * result in $this->getSecret(); and $this->getToken();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["new_password"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset(
                $json->response,
                $json->response->token,
                $json->response->secret
            )) {
                $this->token  = $json->response->token;
                $this->secret = $json->response->secret;

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
        return "account.changePassword";
    }

    /**
     * New secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * New token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Hash received after a successful OAuth authorization with a code got by SMS.; (If the password is changed right
     * after the access was restored)
     *
     * @return $this
     *
     * @param string $change_password_hash
     */
    public function setChangePasswordHash($change_password_hash)
    {
        $this->vkarg_change_password_hash = $change_password_hash;

        return $this;
    }

    /**
     * New password that  will be set as a current
     *
     * @return $this
     *
     * @param string $new_password
     */
    public function setNewPassword($new_password)
    {
        $this->vkarg_new_password = $new_password;

        return $this;
    }

    /**
     * Current user password.
     *
     * @return $this
     *
     * @param string $old_password
     */
    public function setOldPassword($old_password)
    {
        $this->vkarg_old_password = $old_password;

        return $this;
    }

    /**
     * Session id received after the  method is executed.; (If the password is changed right after the access was
     * restored)
     *
     * @return $this
     *
     * @param string $restore_sid
     */
    public function setRestoreSid($restore_sid)
    {
        $this->vkarg_restore_sid = $restore_sid;

        return $this;
    }
}
