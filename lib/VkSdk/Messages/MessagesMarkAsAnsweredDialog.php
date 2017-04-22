<?php

namespace VkSdk\Messages;

use VkSdk\Includes\Request;

/**
 * Помечает диалог как отвеченный либо снимает отметку.
 *
 * Class MessagesMarkAsAnsweredDialog
 * @package VkSdk\Messages
 */
class MessagesMarkAsAnsweredDialog extends Request
{
    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

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
                $this->response = $json->response;

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
        return "5.63";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "messages.markAsAnsweredDialog";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * идентификатор диалога
     *
     * @return $this
     *
     * @param string $peer_id
     */
    public function setPeerId($peer_id)
    {
        $this->vkarg_peer_id = $peer_id;

        return $this;
    }

    /**
     * флаг, может принимать значения 1 или 0, по умолчанию 1
     *
     * @return $this
     *
     * @param boolean $answered
     */
    public function setAnswered($answered)
    {
        $this->vkarg_answered = $answered;

        return $this;
    }
}
