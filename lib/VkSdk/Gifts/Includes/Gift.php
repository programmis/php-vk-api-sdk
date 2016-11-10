<?php
namespace VkSdk\Gifts\Includes;

use lib\AutoFillObject;

/**
 * Class Gift
 *
 * @package VkSdk\Gifts\Includes
 */
class Gift
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $date;

    /**
     * @var integer
     */
    public $from_id;

    /**
     * @var Layout
     */
    public $gift;

    /**
     * @var string
     */
    public $gift_hash;

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
    public $privacy;

    /**
     * Date when gist has been sent in Unixtime
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
     * Gift sender ID
     *
     * @return integer
     */
    public function getFromId()
    {
        return $this->from_id;
    }

    /**
     * @return $this
     *
     * @param integer $from_id
     */
    public function setFromId($from_id)
    {
        $this->from_id = $from_id;

        return $this;
    }

    /**
     * @return Layout
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * @return $this
     *
     * @param Layout $gift
     */
    public function setGift(Layout $gift)
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Hash
     *
     * @return string
     */
    public function getGiftHash()
    {
        return $this->gift_hash;
    }

    /**
     * @return $this
     *
     * @param string $gift_hash
     */
    public function setGiftHash($gift_hash)
    {
        $this->gift_hash = $gift_hash;

        return $this;
    }

    /**
     * Gift ID
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
     * Gift privacy
     *
     * @return integer
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * @return $this
     *
     * @param integer $privacy
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'gift' => 'VkSdk\Gifts\Includes\Layout',
        ];
    }
}
