<?php
namespace VkSdk\Groups\Includes;

/**
 * Class Group
 *
 * @package VkSdk\Groups\Includes
 */
class Group
{

    /**
     * @var integer
     */
    public $admin_level;

    /**
     * @var string
     */
    public $id;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $is_admin;

    /**
     * @var integer
     */
    public $is_closed;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $is_member;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $photo_100;

    /**
     * @var string
     */
    public $photo_200;

    /**
     * @var string
     */
    public $photo_50;

    /**
     * @var string
     */
    public $screen_name;

    /**
     * @var string
     */
    public $type;

    /**
     * Level of current user's credentials as manager
     *
     * @return integer
     */
    public function getAdminLevel()
    {
        return $this->admin_level;
    }

    /**
     * @return $this
     *
     * @param integer $admin_level
     */
    public function setAdminLevel($admin_level)
    {
        $this->admin_level = $admin_level;

        return $this;
    }

    /**
     * Community ID
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Information whether current user is administrator
     *
     * @return integer
     */
    public function getIsAdmin()
    {
        return $this->is_admin;
    }

    /**
     * @return $this
     *
     * @param integer $is_admin
     */
    public function setIsAdmin($is_admin)
    {
        $this->is_admin = $is_admin;

        return $this;
    }

    /**
     * Information whether community is closed
     *
     * @return integer
     */
    public function getIsClosed()
    {
        return $this->is_closed;
    }

    /**
     * @return $this
     *
     * @param integer $is_closed
     */
    public function setIsClosed($is_closed)
    {
        $this->is_closed = $is_closed;

        return $this;
    }

    /**
     * Information whether current user is member
     *
     * @return integer
     */
    public function getIsMember()
    {
        return $this->is_member;
    }

    /**
     * @return $this
     *
     * @param integer $is_member
     */
    public function setIsMember($is_member)
    {
        $this->is_member = $is_member;

        return $this;
    }

    /**
     * Community name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * URL of square photo of the community with 100 pixels in width
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
     * URL of square photo of the community with 200 pixels in width
     *
     * @return string
     */
    public function getPhoto200()
    {
        return $this->photo_200;
    }

    /**
     * @return $this
     *
     * @param string $photo_200
     */
    public function setPhoto200($photo_200)
    {
        $this->photo_200 = $photo_200;

        return $this;
    }

    /**
     * URL of square photo of the community with 50 pixels in width
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
     * Domain of the community page
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
     * Community type
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
