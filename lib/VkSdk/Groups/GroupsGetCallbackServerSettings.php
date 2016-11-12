<?php

namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Returns  server settings for the community.
 *
 * Class GroupsGetCallbackServerSettings
 * @package VkSdk\Groups
 */
class GroupsGetCallbackServerSettings extends Request
{
    /**
     * @var string
     */
    private $secret_key;

    /**
     * @var string
     */
    private $server_url;

    /**
     * result in $this->getSecretKey(); and $this->getServerUrl();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset(
                $json->response,
                $json->response->server_url,
                $json->response->secret_key
            )) {
                $this->secret_key = $json->response->secret_key;
                $this->server_url = $json->response->server_url;

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
        return "groups.getCallbackServerSettings";
    }

    /**
     * Callback API secret key
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secret_key;
    }

    /**
     * Server URL
     *
     * @return string
     */
    public function getServerUrl()
    {
        return $this->server_url;
    }

    /**
     * Community ID.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }
}
