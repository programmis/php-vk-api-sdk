<?php

namespace VkSdk\Fave;

use VkSdk\Includes\Request;

/**
 * Removes link from the user's faves.
 *
 * Class FaveRemoveLink
 * @package VkSdk\Fave
 */
class FaveRemoveLink extends Request
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
        $this->setRequiredParams(["link_id"]);

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
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "fave.removeLink";
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
     * Link ID (can be obtained by  method).
     *
     * @return $this
     *
     * @param string $link_id
     */
    public function setLinkId($link_id)
    {
        $this->vkarg_link_id = $link_id;

        return $this;
    }
}
