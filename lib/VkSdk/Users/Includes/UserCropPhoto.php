<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 04.11.16
 * Time: 21:04
 */

namespace VkSdk\Users\Includes;

use lib\AutoFillObject;
use VkSdk\Photos\Includes\Crop;
use VkSdk\Photos\Includes\Photo;
use VkSdk\Photos\Includes\Rect;

/**
 * содержит данные о точках,
 * по которым вырезаны профильная и миниатюрная
 * фотографии пользователя.
 *
 * Class UserCropPhoto
 * @package VkSdk\Users\Includes
 */
class UserCropPhoto
{
    use AutoFillObject;

    /** @var Photo $photo */
    private $photo;
    /** @var Crop $crop */
    private $crop;
    /** @var Rect $rect */
    private $rect;

    /**
     * объект photo фотографии пользователя,
     * из которой вырезается главное фото профиля.
     *
     * @return Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param Photo $photo
     *
     * @return UserCropPhoto
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * вырезанная фотография пользователя.
     *
     * @return Crop
     */
    public function getCrop()
    {
        return $this->crop;
    }

    /**
     * @param Crop $crop
     *
     * @return UserCropPhoto
     */
    public function setCrop($crop)
    {
        $this->crop = $crop;

        return $this;
    }

    /**
     * миниатюрная квадратная фотография,
     * вырезанная из фотографии crop.
     *
     * @return Rect
     */
    public function getRect()
    {
        return $this->rect;
    }

    /**
     * @param Rect $rect
     *
     * @return UserCropPhoto
     */
    public function setRect($rect)
    {
        $this->rect = $rect;

        return $this;
    }
}
