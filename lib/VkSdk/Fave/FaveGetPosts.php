<?php
namespace VkSdk\Fave;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\WallpostFull;

/**
 * Returns a list of wall posts that the current user has liked.;
 * Class FaveGetPosts
 *
 * @package VkSdk\Fave
 */
class FaveGetPosts extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var WallpostFull[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param WallpostFull $item
     */
    public function addItem(WallpostFull $item)
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
     * Number of posts to return.
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
     * @return WallpostFull[]
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
        return "fave.getPosts";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Wall\Includes\WallpostFull',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * '1' — to return additional 'wall', 'profiles', and 'groups' fields.; ; By default: '0'.
     *
     * @return $this
     *
     * @param boolean $extended
     */
    public function setExtended($extended)
    {
        $this->vkarg_extended = $extended;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of posts.
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
