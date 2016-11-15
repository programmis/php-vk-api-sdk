<?php

namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Returns Callback API confirmation code for the community.
 *
 * Class GroupsGetCallbackConfirmationCode
 * @package VkSdk\Groups
 */
class GroupsGetCallbackConfirmationCode extends Request
{
    /**
     * @var string
     */
    private $code;

    /**
     * result in $this->getCode();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response, $json->response->code)) {
                $this->code = $json->response->code;

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
     * Confirmation code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "groups.getCallbackConfirmationCode";
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
