<?php
namespace VkSdk\Wall\Includes;

/**
 * Class PostedPhoto
 *
 * @package VkSdk\Wall\Includes
 */
class PostedPhoto
{

    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $owner_id;

    /**
     * @var string
     */
    public $photo_130;

    /**
     * @var string
     */
    public $photo_604;

    /**
     * Photo ID
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
     * Photo owner's ID
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    /**
     * URL of the preview image with 130 px in width
     *
     * @return string
     */
    public function getPhoto130()
    {
        return $this->photo_130;
    }

    /**
     * @return $this
     *
     * @param string $photo_130
     */
    public function setPhoto130($photo_130)
    {
        $this->photo_130 = $photo_130;

        return $this;
    }

    /**
     * URL of the preview image with 604 px in width
     *
     * @return string
     */
    public function getPhoto604()
    {
        return $this->photo_604;
    }

    /**
     * @return $this
     *
     * @param string $photo_604
     */
    public function setPhoto604($photo_604)
    {
        $this->photo_604 = $photo_604;

        return $this;
    }
}
