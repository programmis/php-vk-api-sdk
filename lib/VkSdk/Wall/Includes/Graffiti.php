<?php

namespace VkSdk\Wall\Includes;

use lib\AutoFillObject;

/**
 * Class Graffiti
 * @package VkSdk\Wall\Includes
 */
class Graffiti
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var string
     */
    private $photo_200;

    /**
     * @var string
     */
    private $photo_586;

    /**
     * Graffiti ID
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
     * Graffiti owner's ID
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
     * URL of the preview image with 200 px in width
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
     * URL of the preview image with 586 px in width
     *
     * @return string
     */
    public function getPhoto586()
    {
        return $this->photo_586;
    }

    /**
     * @return $this
     *
     * @param string $photo_586
     */
    public function setPhoto586($photo_586)
    {
        $this->photo_586 = $photo_586;

        return $this;
    }
}
