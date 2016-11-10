<?php
namespace VkSdk\Messages\Includes;

/**
 * Class LongpollParams
 *
 * @package VkSdk\Messages\Includes
 */
class LongpollParams
{

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $server;

    /**
     * @var integer
     */
    public $ts;

    /**
     * Key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Server URL
     *
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @return $this
     *
     * @param string $server
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Timestamp
     *
     * @return integer
     */
    public function getTs()
    {
        return $this->ts;
    }

    /**
     * @return $this
     *
     * @param integer $ts
     */
    public function setTs($ts)
    {
        $this->ts = $ts;

        return $this;
    }
}
