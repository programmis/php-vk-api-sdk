<?php
namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Returns information about photos by their IDs.
 * Class PhotosGetById
 *
 * @package VkSdk\Photos
 */
class PhotosGetById extends Request
{

    /**
     * IDs separated with a comma, that are IDs of users who posted photos and IDs of photos themselves with an underscore character between such IDs. To get information about a photo in the group album, you shall specify group ID instead of user ID. Example:; "1_129207899,6492_135055734, ; -20629724_271945303"
     *
     * @return $this
     *
     * @param string $photo
     */
    public function addPhoto($photo)
    {
        $this->vkarg_photos[] = $photo;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["photos"]);

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
        return "photos.getById";
    }

    /**
     * '1' — to return additional fields; '0' — (default)
     *
     * @return $this
     *
     * @param boolean $extended
     */
    public function setExtended($extended)
    {
        $this->vkarg_extended = $extended;

        return $this;
    }

    /**
     * IDs separated with a comma, that are IDs of users who posted photos and IDs of photos themselves with an underscore character between such IDs. To get information about a photo in the group album, you shall specify group ID instead of user ID. Example:; "1_129207899,6492_135055734, ; -20629724_271945303"
     *
     * @return $this
     *
     * @param array $photos
     */
    public function setPhotos(array $photos)
    {
        $this->vkarg_photos = $photos;

        return $this;
    }

    /**
     * '1' — to return photo sizes in a
     *
     * @return $this
     *
     * @param boolean $photo_sizes
     */
    public function setPhotoSizes($photo_sizes)
    {
        $this->vkarg_photo_sizes = $photo_sizes;

        return $this;
    }
}
