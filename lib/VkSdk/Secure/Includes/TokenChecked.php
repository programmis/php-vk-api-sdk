<?php
namespace VkSdk\Secure\Includes;

/**
 * Class TokenChecked
 *
 * @package VkSdk\Secure\Includes
 */
class TokenChecked
{

    /**
     * @var integer
     */
    public $date;

    /**
     * @var integer
     */
    public $expire;

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $success;

    /**
     * @var integer
     */
    public $user_id;

    /**
     * Date when access_token has been generated in Unixtime
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
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
     * Date when access_token will expire in Unixtime
     *
     * @return integer
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * @return $this
     *
     * @param integer $expire
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;

        return $this;
    }

    /**
     * Returns 1 if request has been processed successfully
     * Returns if successfully processed
     *
     * @return integer
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @return $this
     *
     * @param integer $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;

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
