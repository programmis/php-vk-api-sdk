<?php
namespace VkSdk\Notes\Includes;

/**
 * Class NoteComment
 *
 * @package VkSdk\Notes\Includes
 */
class NoteComment
{

    /**
     * @var integer
     */
    public $date;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @var integer
     */
    public $nid;

    /**
     * @var integer
     */
    public $oid;

    /**
     * @var integer
     */
    public $reply_to;

    /**
     * @var integer
     */
    public $uid;

    /**
     * Date when the comment has beed added in Unixtime
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
     * Comment ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Comment text
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
     * Note ID
     *
     * @return integer
     */
    public function getNid()
    {
        return $this->nid;
    }

    /**
     * @return $this
     *
     * @param integer $nid
     */
    public function setNid($nid)
    {
        $this->nid = $nid;

        return $this;
    }

    /**
     * Note ID
     *
     * @return integer
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     * @return $this
     *
     * @param integer $oid
     */
    public function setOid($oid)
    {
        $this->oid = $oid;

        return $this;
    }

    /**
     * ID of replied comment
     *
     * @return integer
     */
    public function getReplyTo()
    {
        return $this->reply_to;
    }

    /**
     * @return $this
     *
     * @param integer $reply_to
     */
    public function setReplyTo($reply_to)
    {
        $this->reply_to = $reply_to;

        return $this;
    }

    /**
     * Comment author's ID
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @return $this
     *
     * @param integer $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }
}
