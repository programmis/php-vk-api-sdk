<?php
namespace VkSdk\Account\Includes;

use lib\AutoFillObject;

/**
 * Class PushSettings
 *
 * @package VkSdk\Account\Includes
 */
class PushSettings
{

    use AutoFillObject;

    /**
     * @var object
     */
    public $conversations;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $disabled;

    /**
     * @var integer
     */
    public $disabled_until;

    /**
     * @var PushParams
     */
    public $settings;

    /**
     * @return object
     */
    public function getConversations()
    {
        return $this->conversations;
    }

    /**
     * @return $this
     *
     * @param object $conversations
     */
    public function setConversations($conversations)
    {
        $this->conversations = $conversations;

        return $this;
    }

    /**
     * Information whether notifications are disabled
     *
     * @return integer
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * @return $this
     *
     * @param integer $disabled
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * Time until that notifications are disabled in Unixtime
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
     * @return PushParams
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @return $this
     *
     * @param PushParams $settings
     */
    public function setSettings(PushParams $settings)
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'settings' => 'VkSdk\Account\Includes\PushParams',
        ];
    }
}
