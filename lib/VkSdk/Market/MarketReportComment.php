<?php
namespace VkSdk\Market;

use VkSdk\Includes\Request;

/**
 * Sends a complaint to the item's comment.
 * Class MarketReportComment
 *
 * @package VkSdk\Market
 */
class MarketReportComment extends Request
{

    /**
     * '0' — spam
     */
    const REASON_0 = 0;

    /**
     * '1' — child porn
     */
    const REASON_1 = 1;

    /**
     * '2' — extremism
     */
    const REASON_2 = 2;

    /**
     * '3' — violence
     */
    const REASON_3 = 3;

    /**
     * '4' — drugs propaganda
     */
    const REASON_4 = 4;

    /**
     * '5' — adult materials
     */
    const REASON_5 = 5;

    /**
     * '6' — insult.
     */
    const REASON_6 = 6;

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
        $this->setRequiredParams(["owner_id", "comment_id", "reason"]);

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
        return "market.reportComment";
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
     * ID of an item owner community.
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
     * Complaint reason. Possible values:; *'0' — spam;; *'1' — child porn;; *'2' — extremism;; *'3' — violence;; *'4' — drugs propaganda;; *'5' — adult materials;; *'6' — insult.
     * see self::REASON_* constants
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
