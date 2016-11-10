<?php
namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * With this method you can join the group or public page, and also confirm your participation in an event.
 * Class GroupsJoin
 *
 * @package VkSdk\Groups
 */
class GroupsJoin extends Request
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
        return "groups.join";
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
     * ID or screen name of the community.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * Optional parameter which is taken into account when 'gid' belongs to the event:; '1' — Perhaps I will attend; '0' — I will be there for sure (default); ;
     *
     * @return $this
     *
     * @param string $not_sure
     */
    public function setNotSure($not_sure)
    {
        $this->vkarg_not_sure = $not_sure;

        return $this;
    }
}
