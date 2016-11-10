<?php

namespace VkSdk\Video;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Video\Includes\AlbumFull;

/**
 * Class VideoGetAlbumsByVideo
 * @package VkSdk\Video
 */
class VideoGetAlbumsByVideo extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var AlbumFull[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param AlbumFull $item
     */
    public function addItem(AlbumFull $item)
    {
        $this->items[] = $item;

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
     * Total number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return AlbumFull[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "video.getAlbumsByVideo";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Video\Includes\AlbumFull',
                'method' => 'addItem'
            ],
        ];
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
