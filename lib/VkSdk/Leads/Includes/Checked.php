<?php

namespace VkSdk\Leads\Includes;

use lib\AutoFillObject;

/**
 * Class Checked
 * @package VkSdk\Leads\Includes
 */
class Checked
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var string
     */
    private $result;

    /**
     * @var string
     */
    private $sid;

    /**
     * @var string
     */
    private $start_link;

    /**
     * Reason why user can't start the lead
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return $this
     *
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Information whether user can start the lead
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return $this
     *
     * @param string $result
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Session ID
     *
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @return $this
     *
     * @param string $sid
     */
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

    /**
     * URL user should open to start the lead
     *
     * @return string
     */
    public function getStartLink()
    {
        return $this->start_link;
    }

    /**
     * @return $this
     *
     * @param string $start_link
     */
    public function setStartLink($start_link)
    {
        $this->start_link = $start_link;

        return $this;
    }
}
