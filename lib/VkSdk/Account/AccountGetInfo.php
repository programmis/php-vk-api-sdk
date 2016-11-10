<?php

namespace VkSdk\Account;

use lib\AutoFillObject;
use VkSdk\Account\Includes\Info;
use VkSdk\Includes\Request;

/**
 * Returns current account info.
 * Class AccountGetInfo
 * @package VkSdk\Account
 */
class AccountGetInfo extends Request
{
    use AutoFillObject;

    /**
     * @var Info
     */
    private $response;

    /**
     * @return Info
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Fields to return. Possible values:;
     *'country' — user country;;
     *'https_required' — is "HTTPS only" option enabled;;
     *'own_posts_default' — is "Show my posts only" option is enabled;;
     *'no_wall_replies' — are wall replies disabled or not;;
     *'intro' — is intro passed by user or not;;
     *'lang' — user language.;
     * By default: all.
     *
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->vkarg_fields[] = $field;

        return $this;
    }

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
                $this->fillByJson($json);

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
        return "account.getInfo";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Account\Includes\Info',
        ];
    }

    /**
     * Fields to return. Possible values:;
     *'country' — user country;;
     *'https_required' — is "HTTPS only" option enabled;;
     *'own_posts_default' — is "Show my posts only" option is enabled;;
     *'no_wall_replies' — are wall replies disabled or not;;
     *'intro' — is intro passed by user or not;;
     *'lang' — user language.;
     * By default: all.
     *
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->vkarg_fields = $fields;

        return $this;
    }
}
