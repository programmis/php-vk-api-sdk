<?php
namespace VkSdk\Leads;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Leads\Includes\Complete;

/**
 * Completes the lead started by user.
 * Class LeadsComplete
 *
 * @package VkSdk\Leads
 */
class LeadsComplete extends Request
{

    use AutoFillObject;

    /**
     * @var Complete
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["vk_sid", "secret"]);

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
        return "leads.complete";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Leads\Includes\Complete',
        ];
    }

    /**
     * Comment text.
     *
     * @return $this
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->vkarg_comment = $comment;

        return $this;
    }

    /**
     * Secret key from the lead testing interface.
     *
     * @return $this
     *
     * @param string $secret
     */
    public function setSecret($secret)
    {
        $this->vkarg_secret = $secret;

        return $this;
    }

    /**
     * Session obtained as GET parameter when session started.
     *
     * @return $this
     *
     * @param string $vk_sid
     */
    public function setVkSid($vk_sid)
    {
        $this->vkarg_vk_sid = $vk_sid;

        return $this;
    }
}
