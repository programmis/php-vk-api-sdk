<?php
namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Adds a tag on the photo.
 * Class PhotosPutTag
 *
 * @package VkSdk\Photos
 */
class PhotosPutTag extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["photo_id", "user_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "photos.putTag";
    }

    /**
     * ID of the user or community that owns the photo.
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }

    /**
     * Photo ID.
     *
     * @return $this
     *
     * @param integer $photo_id
     */
    public function setPhotoId($photo_id)
    {
        $this->vkarg_photo_id = $photo_id;

        return $this;
    }

    /**
     * ID of the user to be tagged.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }

    /**
     * Upper left-corner coordinate of the tagged area (as a percentage of the photo's width).
     *
     * @return $this
     *
     * @param number $x
     */
    public function setX(number $x)
    {
        $this->vkarg_x = $x;

        return $this;
    }

    /**
     * Lower right-corner coordinate of the tagged area (as a percentage of the photo's width).
     *
     * @return $this
     *
     * @param number $x2
     */
    public function setX2(number $x2)
    {
        $this->vkarg_x2 = $x2;

        return $this;
    }

    /**
     * Upper left-corner coordinate of the tagged area (as a percentage of the photo's height).
     *
     * @return $this
     *
     * @param number $y
     */
    public function setY(number $y)
    {
        $this->vkarg_y = $y;

        return $this;
    }

    /**
     * Lower right-corner coordinate of the tagged area (as a percentage of the photo's height).
     *
     * @return $this
     *
     * @param number $y2
     */
    public function setY2(number $y2)
    {
        $this->vkarg_y2 = $y2;

        return $this;
    }
}
