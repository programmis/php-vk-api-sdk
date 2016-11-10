<?php
namespace VkSdk\Video;

use VkSdk\Includes\Request;

/**
 * Reorders the album in the list of user video albums.
 * Class VideoReorderAlbums
 *
 * @package VkSdk\Video
 */
class VideoReorderAlbums extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["album_id"]);

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
        return "video.reorderAlbums";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * ID of the album after which the album in question shall be placed.
     *
     * @return $this
     *
     * @param integer $after
     */
    public function setAfter($after)
    {
        $this->vkarg_after = $after;

        return $this;
    }

    /**
     * Album ID.
     *
     * @return $this
     *
     * @param integer $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->vkarg_album_id = $album_id;

        return $this;
    }

    /**
     * ID of the album before which the album in question shall be placed.
     *
     * @return $this
     *
     * @param integer $before
     */
    public function setBefore($before)
    {
        $this->vkarg_before = $before;

        return $this;
    }

    /**
     * ID of the user or community that owns the albums..
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
}
