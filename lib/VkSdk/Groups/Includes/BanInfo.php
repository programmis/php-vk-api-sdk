<?php

namespace VkSdk\Groups\Includes;

/**
 * Class BanInfo
 * @package VkSdk\Groups\Includes
 */
class BanInfo
{
    /**
     * @var integer
     */
    public $admin_id;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var integer
     */
    public $date;

    /**
     * @var integer
     */
    public $end_date;

    /**
     * @var integer
     */
    public $reason;

    /**
     * Administrator ID
     * @return integer
     */
    public function getAdminId()
    {
        return $this->admin_id;
    }

    /**
     * Comment for a ban
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Date when user has been added to blacklist in Unixtime
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Date when user will be removed from blacklist in Unixtime
     * @return integer
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Ban reason
     * @return integer
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return $this
     *
     * @param integer $admin_id
     */
    public function setAdminId($admin_id)
    {
        $this->admin_id = $admin_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $end_date
     */
    public function setEndDate($end_date)
    {
        $this->end_date = $end_date;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
