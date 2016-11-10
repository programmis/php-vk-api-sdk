<?php
namespace VkSdk\Users\Includes;

/**
 * Class User
 *
 * @package VkSdk\Users\Includes
 */
class User
{

    /**
     * @var string
     */
    public $deactivated;

    /**
     * @var string
     */
    public $first_name;

    /**
     * @var integer
     */
    public $hidden;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $last_name;

    /**
     * @var integer
     */
    public $online;

    /**
     * @var string
     */
    public $photo_100;

    /**
     * @var string
     */
    public $photo_50;

    /**
     * @var string
     */
    public $screen_name;

    /**
     * @var integer
     */
    public $sex;

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
}