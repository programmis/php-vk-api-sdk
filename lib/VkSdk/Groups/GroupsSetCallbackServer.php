<?php
namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Allow to set  server URL for the community. ; ;
 * Class GroupsSetCallbackServer
 *
 * @package VkSdk\Groups
 */
class GroupsSetCallbackServer extends Request
{

    /**
     * @var string
     */
    public $state;

    /**
     * @var integer
     */
    public $state_code;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id"]);

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
        return "groups.setCallbackServer";
    }

    /**
     * State
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * State code
     *
     * @return integer
     */
    public function getStateCode()
    {
        return $this->state_code;
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

    /**
     * Server URL.
     *
     * @return $this
     *
     * @param string $server_url
     */
    public function setServerUrl($server_url)
    {
        $this->vkarg_server_url = $server_url;

        return $this;
    }
}
