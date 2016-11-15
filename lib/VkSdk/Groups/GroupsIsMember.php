<?php

namespace VkSdk\Groups;

use lib\AutoFillObject;
use VkSdk\Includes\Request;

/**
 * Returns information specifying whether a user is a member
 * of a community.
 *
 * Class GroupsIsMember
 * @package VkSdk\Groups
 */
class GroupsIsMember extends Request
{
    use AutoFillObject;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $invitation;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $member;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $request;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $response;

    /**
     * User IDs.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function addUserId($user_id)
    {
        $this->vkarg_user_ids[] = $user_id;

        return $this;
    }

    /**
     * result in $this->getInvitation();
     * and $this->getMember();
     * and $this->getRequest();
     * and $this->getResponse();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->fillByJson($json->response);

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
     * Information whether user has been invited to the group
     *
     * @return integer
     */
    public function getInvitation()
    {
        return $this->invitation;
    }

    /**
     * Information whether user is a member of the group
     *
     * @return integer
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "groups.isMember";
    }

    /**
     * Information whether user has sent request to the group
     *
     * @return integer
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * See constants of class BoolInt
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * '1' — to return an extended response with additional fields.; By default: '0'.
     *
     * @return $this
     *
     * @param boolean $extended
     */
    public function setExtended($extended)
    {
        $this->vkarg_extended = $extended;

        return $this;
    }

    /**
     * ID or screen name of the community.
     *
     * @return $this
     *
     * @param string $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * User ID.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }

    /**
     * User IDs.
     *
     * @return $this
     *
     * @param array $user_ids
     */
    public function setUserIds(array $user_ids)
    {
        $this->vkarg_user_ids = $user_ids;

        return $this;
    }
}
