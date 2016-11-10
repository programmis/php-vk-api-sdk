<?php
namespace VkSdk\Video;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Video\Includes\AlbumFull;

/**
 * Returns video album info
 * Class VideoGetAlbumById
 *
 * @package VkSdk\Video
 */
class VideoGetAlbumById extends Request
{

    use AutoFillObject;

    /**
     * @var AlbumFull
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
        return "video.getAlbumById";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Video\Includes\AlbumFull',
        ];
    }

    /**
     * album ID.
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
     * identifier of a user or community to add a video to. ; Use a negative value to designate a community ID.
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
