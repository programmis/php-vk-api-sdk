<?php

namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Edits a retarget group.
 * Class AdsUpdateTargetGroup
 * @package VkSdk\Ads
 */
class AdsUpdateTargetGroup extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id", "target_group_id", "name"]);

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
        return "ads.updateTargetGroup";
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
     * Advertising account ID.
     *
     * @return $this
     *
     * @param integer $account_id
     */
    public function setAccountId($account_id)
    {
        $this->vkarg_account_id = $account_id;

        return $this;
    }

    /**
     * 'Only for advertising agencies.' ; ID of the client with the advertising account where the group will be created.;
     *
     * @return $this
     *
     * @param integer $client_id
     */
    public function setClientId($client_id)
    {
        $this->vkarg_client_id = $client_id;

        return $this;
    }

    /**
     * Domain of the site where user accounting code will be placed.
     *
     * @return $this
     *
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->vkarg_domain = $domain;

        return $this;
    }

    /**
     * 'Only for the groups that get audience from sites with user accounting code.'; Time in days when users added to a retarget group will be automatically excluded from it. ; '0' – automatic exclusion is off.
     *
     * @return $this
     *
     * @param integer $lifetime
     */
    public function setLifetime($lifetime)
    {
        $this->vkarg_lifetime = $lifetime;

        return $this;
    }

    /**
     * New name of the target group — a string up to 64 characters long.
     *
     * @return $this
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->vkarg_name = $name;

        return $this;
    }

    /**
     * Group ID.
     *
     * @return $this
     *
     * @param integer $target_group_id
     */
    public function setTargetGroupId($target_group_id)
    {
        $this->vkarg_target_group_id = $target_group_id;

        return $this;
    }
}
