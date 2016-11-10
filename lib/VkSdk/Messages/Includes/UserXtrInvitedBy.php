<?php

namespace VkSdk\Messages\Includes;

use lib\AutoFillObject;

/**
 * Class UserXtrInvitedBy
 * @package VkSdk\Messages\Includes
 */
class UserXtrInvitedBy
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $deactivated;

    /**
     * @var string
     */
    private $first_name;

    /**
     * @var integer
     */
    private $hidden;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $invited_by;

    /**
     * @var string
     */
    private $last_name;

    /**
     * @var integer
     */
    private $online;

    /**
     * @var string
     */
    private $photo_100;

    /**
     * @var string
     */
    private $photo_50;

    /**
     * @var string
     */
    private $screen_name;

    /**
     * @var integer
     */
    private $sex;

    /**
     * @var string
     */
    private $type;

    /**
     * Returns if a profile is deleted or blocked
     *
     * @return string
     */
    public function getDeactivated()
    {
        return $this->deactivated;
    }

    /**
     * @return $this
     *
     * @param string $deactivated
     */
    public function setDeactivated($deactivated)
    {
        $this->deactivated = $deactivated;

        return $this;
    }

    /**
     * User first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return $this
     *
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Returns if a profile is hidden.
     *
     * @return integer
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * @return $this
     *
     * @param integer $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * User ID
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
     * ID of the inviter
     *
     * @return integer
     */
    public function getInvitedBy()
    {
        return $this->invited_by;
    }

    /**
     * @return $this
     *
     * @param integer $invited_by
     */
    public function setInvitedBy($invited_by)
    {
        $this->invited_by = $invited_by;

        return $this;
    }

    /**
     * User last name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return $this
     *
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Information whether the user is online
     *
     * @return integer
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * @return $this
     *
     * @param integer $online
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * URL of square photo of the user with 100 pixels in width
     *
     * @return string
     */
    public function getPhoto100()
    {
        return $this->photo_100;
    }

    /**
     * @return $this
     *
     * @param string $photo_100
     */
    public function setPhoto100($photo_100)
    {
        $this->photo_100 = $photo_100;

        return $this;
    }

    /**
     * URL of square photo of the user with 50 pixels in width
     *
     * @return string
     */
    public function getPhoto50()
    {
        return $this->photo_50;
    }

    /**
     * @return $this
     *
     * @param string $photo_50
     */
    public function setPhoto50($photo_50)
    {
        $this->photo_50 = $photo_50;

        return $this;
    }

    /**
     * Domain name of the user's page
     *
     * @return string
     */
    public function getScreenName()
    {
        return $this->screen_name;
    }

    /**
     * @return $this
     *
     * @param string $screen_name
     */
    public function setScreenName($screen_name)
    {
        $this->screen_name = $screen_name;

        return $this;
    }

    /**
     * User sex
     *
     * @return integer
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return $this
     *
     * @param integer $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Object type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
