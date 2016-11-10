<?php
namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Creates a group to re-target ads for users who visited advertiser's site (viewed information about the product, registered, etc.).
 * Class AdsCreateTargetGroup
 *
 * @package VkSdk\Ads
 */
class AdsCreateTargetGroup extends Request
{

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $pixel;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["account_id", "name"]);

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
     * Group ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "ads.createTargetGroup";
    }

    /**
     * Pixel code
     *
     * @return string
     */
    public function getPixel()
    {
        return $this->pixel;
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
     * 'Only for advertising agencies.'; ID of the client with the advertising account where the group will be created.;
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
     * 'For groups with auditory created with pixel code only.'; ; Number of days after that users will be automatically removed from the group. '0' — not to remove users.;
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
     * Name of the target group — a string up to 64 characters long.
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
}
