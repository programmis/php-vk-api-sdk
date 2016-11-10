<?php
namespace VkSdk\Account\Includes;

use lib\AutoFillObject;

/**
 * Class LookupResult
 *
 * @package VkSdk\Account\Includes
 */
class LookupResult
{

    use AutoFillObject;

    /**
     * @var UserXtrContacts[]
     */
    public $found;

    /**
     * @var array(array)
     */
    public $other;

    /**
     * @return $this
     *
     * @param UserXtrContacts $found
     */
    public function addFound(UserXtrContacts $found)
    {
        $this->found[] = $found;

        return $this;
    }

    /**
     * @return UserXtrContacts[]
     */
    public function getFound()
    {
        return $this->found;
    }

    /**
     * @return $this
     *
     * @param array $found
     */
    public function setFound(array $found)
    {
        $this->found = $found;

        return $this;
    }

    /**
     * @return array(array)[]
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * @return $this
     *
     * @param array $other
     */
    public function setOther(array $other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'found' => [
                'class'  => 'VkSdk\Account\Includes\UserXtrContacts',
                'method' => 'addFound'
            ],
        ];
    }
}
