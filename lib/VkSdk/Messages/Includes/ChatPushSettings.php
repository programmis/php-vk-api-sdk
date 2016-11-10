<?php
namespace VkSdk\Messages\Includes;

/**
 * Class ChatPushSettings
 *
 * @package VkSdk\Messages\Includes
 */
class ChatPushSettings
{

    /**
     * @var integer
     */
    public $disabled_until;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $sound;

    /**
     * Time until that notifications are disabled
     *
     * @return integer
     */
    public function getDisabledUntil()
    {
        return $this->disabled_until;
    }

    /**
     * @return $this
     *
     * @param integer $disabled_until
     */
    public function setDisabledUntil($disabled_until)
    {
        $this->disabled_until = $disabled_until;

        return $this;
    }

    /**
     * Information whether the sound is on
     *
     * @return integer
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * @return $this
     *
     * @param integer $sound
     */
    public function setSound($sound)
    {
        $this->sound = $sound;

        return $this;
    }
}
