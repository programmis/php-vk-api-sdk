<?php
namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Adds a user to a community blacklist.
 * Class GroupsBanUser
 *
 * @package VkSdk\Groups
 */
class GroupsBanUser extends Request
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
        $this->setRequiredParams(["group_id", "user_id"]);

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
        return "groups.banUser";
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
     * Text of comment to ban.
     *
     * @return $this
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->vkarg_comment = $comment;

        return $this;
    }

    /**
     * '1' — text of comment will be visible to the user;; '0' — text of comment will be invisible to the user. ; By default: '0'.
     *
     * @return $this
     *
     * @param boolean $comment_visible
     */
    public function setCommentVisible($comment_visible)
    {
        $this->vkarg_comment_visible = $comment_visible;

        return $this;
    }

    /**
     * Date (in Unix time) when the user will be removed from the blacklist.
     *
     * @return $this
     *
     * @param integer $end_date
     */
    public function setEndDate($end_date)
    {
        $this->vkarg_end_date = $end_date;

        return $this;
    }

    /**
     * Community ID.
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
     * Reason for ban:; '1' — spam; '2' — verbal abuse; '3' — strong language; '4' — irrelevant messages; '0' — other (default)
     *
     * @return $this
     *
     * @param integer $reason
     */
    public function setReason($reason)
    {
        $this->vkarg_reason = $reason;

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
}
