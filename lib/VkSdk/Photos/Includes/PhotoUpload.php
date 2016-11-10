<?php

namespace VkSdk\Photos\Includes;

use lib\AutoFillObject;

/**
 * Class PhotoUpload
 * @package VkSdk\Photos\Includes
 */
class PhotoUpload
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $album_id;

    /**
     * @var string
     */
    private $upload_url;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * Album ID
     *
     * @return integer
     */
    public function getAlbumId()
    {
        return $this->album_id;
    }

    /**
     * @return $this
     *
     * @param integer $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->album_id = $album_id;

        return $this;
    }

    /**
     * URL to upload photo
     *
     * @return string
     */
    public function getUploadUrl()
    {
        return $this->upload_url;
    }

    /**
     * @return $this
     *
     * @param string $upload_url
     */
    public function setUploadUrl($upload_url)
    {
        $this->upload_url = $upload_url;

        return $this;
    }

    /**
     * User ID
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }
}
