<?php

namespace VkSdk\Notifications;

use VkSdk\Includes\Request;

/**
 * Resets the counter of new notifications about other users' feedback to the current user's wall posts.
 * Class NotificationsMarkAsViewed
 * @package VkSdk\Notifications
 */
class NotificationsMarkAsViewed extends Request
{

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $response;

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
        return "notifications.markAsViewed";
    }

    /**
     * See constants of class BoolInt
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }
}
