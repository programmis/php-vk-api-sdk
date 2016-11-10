<?php
namespace VkSdk\Friends\Includes;

/**
 * Class RequestsXtrMessage
 *
 * @package VkSdk\Friends\Includes
 */
class RequestsXtrMessage
{

    /**
     * @var string
     */
    public $from;

    /**
     * @var string
     */
    public $message;

    /**
     * @var object
     */
    public $mutual;

    /**
     * @var integer
     */
    public $user_id;

    /**
     * ID of the user by whom friend has been suggested
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return $this
     *
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Message sent with a request
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return $this
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return object
     */
    public function getMutual()
    {
        return $this->mutual;
    }

    /**
     * @return $this
     *
     * @param object $mutual
     */
    public function setMutual($mutual)
    {
        $this->mutual = $mutual;

        return $this;
    }

    /**
     * User ID
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }
}
