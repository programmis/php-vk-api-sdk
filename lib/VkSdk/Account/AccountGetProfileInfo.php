<?php

namespace VkSdk\Account;

use lib\AutoFillObject;
use VkSdk\Account\Includes\UserSettings;
use VkSdk\Includes\Request;

/**
 * Returns the current account info.
 *
 * Class AccountGetProfileInfo
 * @package VkSdk\Account
 */
class AccountGetProfileInfo extends Request
{
    use AutoFillObject;

    /**
     * @var UserSettings
     */
    private $response;

    /**
     * @return UserSettings
     */
    public function getResponse()
    {
        return $this->response;
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
                $this->fillByJson($json);

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
        return "account.getProfileInfo";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Account\Includes\UserSettings',
        ];
    }
}
