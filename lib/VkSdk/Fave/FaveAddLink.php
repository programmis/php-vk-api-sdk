<?php
namespace VkSdk\Fave;

use VkSdk\Includes\Request;

/**
 * Adds a link to user faves.
 * Class FaveAddLink
 *
 * @package VkSdk\Fave
 */
class FaveAddLink extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["link"]);

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
        return "fave.addLink";
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
     * Link URL.
     *
     * @return $this
     *
     * @param string $link
     */
    public function setLink($link)
    {
        $this->vkarg_link = $link;

        return $this;
    }

    /**
     * Description text.
     *
     * @return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->vkarg_text = $text;

        return $this;
    }
}
