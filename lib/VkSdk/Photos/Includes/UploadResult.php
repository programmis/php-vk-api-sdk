<?php
/**
 * Created by PhpStorm.
 * User: daniil
 * Date: 10.11.16
 * Time: 14:14
 */

namespace VkSdk\Photos\Includes;

use lib\AutoFillObject;

/**
 * Class UploadResult
 *
 * @package VkSdk\Photos\Includes
 */
class UploadResult
{
    use AutoFillObject;

    /** @var int $server */
    private $server;
    /** @var string $photo */
    private $photo;
    /** @var array $photos_list */
    private $photos_list;
    /** @var int $aid */
    private $aid;
    /** @var int $mid */
    private $mid;
    /** @var string $hash */
    private $hash;
    /** @var int $message_code */
    private $message_code;
    /** @var int $profile_aid */
    private $profile_aid;
    /** @var string $crop_hash */
    private $crop_hash;
    /** @var string $crop_data */
    private $crop_data;
    /** @var string $error */
    private $error;

    /**
     * @return string
     */
    public function getCropHash()
    {
        return $this->crop_hash;
    }

    /**
     * @param string $crop_hash
     */
    public function setCropHash($crop_hash)
    {
        $this->crop_hash = $crop_hash;

        return $this;
    }

    /**
     * @return string
     */
    public function getCropData()
    {
        return $this->crop_data;
    }

    /**
     * @param string $crop_data
     */
    public function setCropData($crop_data)
    {
        $this->crop_data = $crop_data;

        return $this;
    }

    /**
     * @return array
     */
    public function getPhotosList()
    {
        return $this->photos_list;
    }

    /**
     * @param array $photos_list
     */
    public function setPhotosList($photos_list)
    {
        $this->photos_list = $photos_list;

        return $this;
    }

    /**
     * @return int
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param int $aid
     */
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * @return int
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @param int $server
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return int
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * @param int $mid
     */
    public function setMid($mid)
    {
        $this->mid = $mid;

        return $this;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return int
     */
    public function getMessageCode()
    {
        return $this->message_code;
    }

    /**
     * @param int $message_code
     */
    public function setMessageCode($message_code)
    {
        $this->message_code = $message_code;

        return $this;
    }

    /**
     * @return int
     */
    public function getProfileAid()
    {
        return $this->profile_aid;
    }

    /**
     * @param int $profile_aid
     */
    public function setProfileAid($profile_aid)
    {
        $this->profile_aid = $profile_aid;

        return $this;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }
}
