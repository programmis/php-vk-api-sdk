<?php
namespace VkSdk\Video;

use VkSdk\Includes\Request;

/**
 * Creates an empty album for videos.
 * Class VideoAddAlbum
 *
 * @package VkSdk\Video
 */
class VideoAddAlbum extends Request
{

    /**
     * @var integer
     */
    public $album_id;

    /**
     * new access permissions for the album.; Possible values: ; *'0' – all users;; *'1' – friends only;; *'2' – friends and friends of friends;; *'3' – "only me".
     *
     * @return $this
     *
     * @param string $privacy
     */
    public function addPrivacy($privacy)
    {
        $this->vkarg_privacy[] = $privacy;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * Created album ID
     *
     * @return integer
     */
    public function getAlbumId()
    {
        return $this->album_id;
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
        return "video.addAlbum";
    }

    /**
     * Community ID (if the album will be created in a community).
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * new access permissions for the album.; Possible values: ; *'0' – all users;; *'1' – friends only;; *'2' – friends and friends of friends;; *'3' – "only me".
     *
     * @return $this
     *
     * @param array $privacy
     */
    public function setPrivacy(array $privacy)
    {
        $this->vkarg_privacy = $privacy;

        return $this;
    }

    /**
     * Album title.
     *
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->vkarg_title = $title;

        return $this;
    }
}
