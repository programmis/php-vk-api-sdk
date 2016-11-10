<?php
namespace VkSdk\Video;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserMin;
use VkSdk\Video\Includes\Video;

/**
 * Returns list of videos in which the user is tagged.
 * Class VideoGetUserVideos
 *
 * @package VkSdk\Video
 */
class VideoGetUserVideos extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var GroupFull[]
     */
    public $groups;

    /**
     * @var Video[]
     */
    public $items;

    /**
     * @var UserMin[]
     */
    public $profiles;

    /**
     * @return $this
     *
     * @param GroupFull $group
     */
    public function addGroup(GroupFull $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * @return $this
     *
     * @param Video $item
     */
    public function addItem(Video $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return $this
     *
     * @param UserMin $profile
     */
    public function addProfile(UserMin $profile)
    {
        $this->profiles[] = $profile;

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
     * @return GroupFull[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return Video[]
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
        return "video.getUserVideos";
    }

    /**
     * @return UserMin[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items'    => [
                'class'  => 'VkSdk\Video\Includes\Video',
                'method' => 'addItem'
            ],
            'profiles' => [
                'class'  => 'VkSdk\Users\Includes\UserMin',
                'method' => 'addProfile'
            ],
            'groups'   => [
                'class'  => 'VkSdk\Groups\Includes\GroupFull',
                'method' => 'addGroup'
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

    /**
     * User ID.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
