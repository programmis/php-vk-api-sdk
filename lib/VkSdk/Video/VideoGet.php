<?php
namespace VkSdk\Video;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserMin;
use VkSdk\Video\Includes\Full;

/**
 * Returns detailed information about videos.
 * Class VideoGet
 *
 * @package VkSdk\Video
 */
class VideoGet extends Request
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
     * @var Full[]
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
     * @param Full $item
     */
    public function addItem(Full $item)
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
     * Video IDs, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; Use a negative value to designate a community ID.; ; Example:; "-4363_136089719,13245770_137352259"
     *
     * @return $this
     *
     * @param string $video
     */
    public function addVideo($video)
    {
        $this->vkarg_videos[] = $video;

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
     * @return Full[]
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
        return "video.get";
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
                'class'  => 'VkSdk\Video\Includes\Full',
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
     * ID of the album containing the video(s).
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
     * '1' — to return an extended response with additional fields
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
     * ID of the user or community that owns the video(s).
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

    /**
     * Video IDs, in the following format:; "<owner_id>_<media_id>,<owner_id>_<media_id>"; Use a negative value to designate a community ID.; ; Example:; "-4363_136089719,13245770_137352259"
     *
     * @return $this
     *
     * @param array $videos
     */
    public function setVideos(array $videos)
    {
        $this->vkarg_videos = $videos;

        return $this;
    }
}
