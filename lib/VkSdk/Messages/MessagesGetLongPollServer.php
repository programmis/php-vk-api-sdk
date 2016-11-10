<?php
namespace VkSdk\Messages;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\LongpollParams;

/**
 * Returns data required for connection to a Long Poll server.
 * Class MessagesGetLongPollServer
 *
 * @package VkSdk\Messages
 */
class MessagesGetLongPollServer extends Request
{

    use AutoFillObject;

    /**
     * @var LongpollParams
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
        return "messages.getLongPollServer";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Messages\Includes\LongpollParams',
        ];
    }

    /**
     * '1' — to return the 'pts' field, needed for the  method.
     *
     * @return $this
     *
     * @param boolean $need_pts
     */
    public function setNeedPts($need_pts)
    {
        $this->vkarg_need_pts = $need_pts;

        return $this;
    }

    /**
     * '1' — to use SSL.
     *
     * @return $this
     *
     * @param boolean $use_ssl
     */
    public function setUseSsl($use_ssl)
    {
        $this->vkarg_use_ssl = $use_ssl;

        return $this;
    }
}
