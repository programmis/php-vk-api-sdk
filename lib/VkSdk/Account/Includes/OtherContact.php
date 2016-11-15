<?php

namespace VkSdk\Account\Includes;

/**
 * Class OtherContact
 * @package VkSdk\Account\Includes
 */
class OtherContact
{
    /**
     * @var integer
     */
    public $common_count;

    /**
     * @var string
     */
    public $contact;

    /**
     * Mutual friends count
     * @return integer
     */
    public function getCommonCount()
    {
        return $this->common_count;
    }

    /**
     * Contact
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @return $this
     *
     * @param integer $common_count
     */
    public function setCommonCount($common_count)
    {
        $this->common_count = $common_count;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }
}
