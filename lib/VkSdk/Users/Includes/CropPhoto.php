<?php
namespace VkSdk\Users\Includes;

use lib\AutoFillObject;
use VkSdk\Photos\Includes\Photo;

/**
 * Class CropPhoto
 *
 * @package VkSdk\Users\Includes
 */
class CropPhoto
{

    use AutoFillObject;

    /**
     * @var object
     */
    public $crop;

    /**
     * @var Photo
     */
    public $photo;

    /**
     * @var object
     */
    public $rect;

    /**
     * @return object
     */
    public function getCrop()
    {
        return $this->crop;
    }

    /**
     * @return $this
     *
     * @param object $crop
     */
    public function setCrop($crop)
    {
        $this->crop = $crop;

        return $this;
    }

    /**
     * @return Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return $this
     *
     * @param Photo $photo
     */
    public function setPhoto(Photo $photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return object
     */
    public function getRect()
    {
        return $this->rect;
    }

    /**
     * @return $this
     *
     * @param object $rect
     */
    public function setRect($rect)
    {
        $this->rect = $rect;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'photo' => 'VkSdk\Photos\Includes\Photo',
        ];
    }
}
