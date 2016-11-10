<?php
namespace VkSdk\Utils;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Utils\Includes\DomainResolved;

/**
 * Detects a type of object (e.g., user, community, application) and its ID by screen name.
 * Class UtilsResolveScreenName
 *
 * @package VkSdk\Utils
 */
class UtilsResolveScreenName extends Request
{

    use AutoFillObject;

    /**
     * @var DomainResolved
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["screen_name"]);

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
        return "utils.resolveScreenName";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Utils\Includes\DomainResolved',
        ];
    }

    /**
     * Screen name of the user, community (e.g., 'apiclub,' 'andrew', or 'rules_of_war'), or application.
     *
     * @return $this
     *
     * @param string $screen_name
     */
    public function setScreenName($screen_name)
    {
        $this->vkarg_screen_name = $screen_name;

        return $this;
    }
}
