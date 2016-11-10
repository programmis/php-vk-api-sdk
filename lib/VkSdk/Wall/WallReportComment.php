<?php
namespace VkSdk\Wall;

use VkSdk\Includes\Request;

/**
 * Reports (submits a complaint about) a comment on a post on a user wall or community wall.;
 * Class WallReportComment
 *
 * @package VkSdk\Wall
 */
class WallReportComment extends Request
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
        $this->setRequiredParams(["owner_id", "comment_id"]);

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
        return "wall.reportComment";
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
     * Comment ID.
     *
     * @return $this
     *
     * @param integer $comment_id
     */
    public function setCommentId($comment_id)
    {
        $this->vkarg_comment_id = $comment_id;

        return $this;
    }

    /**
     * ID of the user or community that owns the wall.
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }

    /**
     * Reason for the complaint:; '0' – spam; '1' – child pornography; '2' – extremism; '3' – violence; '4' – drug propaganda; '5' – adult material; '6' – insult; abuse
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
}
