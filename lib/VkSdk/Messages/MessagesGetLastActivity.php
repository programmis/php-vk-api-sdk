<?php

namespace VkSdk\Messages;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\LastActivity;

/**
 * Returns a user's current status and date of last activity.
 * Class MessagesGetLastActivity
 * @package VkSdk\Messages
 */
class MessagesGetLastActivity extends Request
{

    use AutoFillObject;

    /**
     * @var LastActivity
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["user_id"]);

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
        return "messages.getLastActivity";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Messages\Includes\LastActivity',
        ];
    }

    /**
     * User ID.
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
}
