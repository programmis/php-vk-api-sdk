<?php
namespace VkSdk\Video;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Video\Includes\TagInfo;

/**
 * Returns a list of videos with tags that have not been viewed.
 * Class VideoGetNewTags
 *
 * @package VkSdk\Video
 */
class VideoGetNewTags extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var TagInfo[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param TagInfo $item
     */
    public function addItem(TagInfo $item)
    {
        $this->items[] = $item;

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
     * Number of videos to return.
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * @return TagInfo[]
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
        return "video.getNewTags";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Video\Includes\TagInfo',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Offset needed to return a specific subset of videos.
     *
     * @return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }
}
