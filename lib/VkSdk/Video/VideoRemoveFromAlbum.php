<?php
namespace VkSdk\Video;

use VkSdk\Includes\Request;

/**
 * Class VideoRemoveFromAlbum
 *
 * @package VkSdk\Video
 */
class VideoRemoveFromAlbum extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * @return $this
     *
     * @param integer $album_id
     */
    public function addAlbumId($album_id)
    {
        $this->vkarg_album_ids[] = $album_id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id", "video_id"]);

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
        return "video.removeFromAlbum";
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
     * @return $this
     *
     * @param array $album_ids
     */
    public function setAlbumIds(array $album_ids)
    {
        $this->vkarg_album_ids = $album_ids;

        return $this;
    }

    /**
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
     * @return $this
     *
     * @param integer $target_id
     */
    public function setTargetId($target_id)
    {
        $this->vkarg_target_id = $target_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $video_id
     */
    public function setVideoId($video_id)
    {
        $this->vkarg_video_id = $video_id;

        return $this;
    }
}
