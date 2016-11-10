<?php
namespace VkSdk\Utils;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Utils\Includes\LinkChecked;

/**
 * Checks whether a link is blocked in VK.
 * Class UtilsCheckLink
 *
 * @package VkSdk\Utils
 */
class UtilsCheckLink extends Request
{

    use AutoFillObject;

    /**
     * @var LinkChecked
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["url"]);

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
        return "utils.checkLink";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Utils\Includes\LinkChecked',
        ];
    }

    /**
     * Link to check (e.g., 'http://google.com').
     *
     * @return $this
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->vkarg_url = $url;

        return $this;
    }
}
