<?php

namespace VkSdk\Video;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserMin;
use VkSdk\Video\Includes\Video;

/**
 * Returns a list of videos under the set search criterion.
 * Class VideoSearch
 * @package VkSdk\Video
 */
class VideoSearch extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var GroupFull[]
     */
    private $groups;

    /**
     * @var Video[]
     */
    private $items;

    /**
     * @var UserMin[]
     */
    private $profiles;

    /**
     * Filters to apply:; 'youtube' — return YouTube videos only; 'vimeo' — return Vimeo videos only; 'short' — return short videos only; 'long' — return long videos only
     *
     * @return $this
     *
     * @param string $filter
     */
    public function addFilter($filter)
    {
        $this->vkarg_filters[] = $filter;

        return $this;
    }

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
        $this->setRequiredParams(["q"]);

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
        return "video.search";
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
     * '1' — to disable the Safe Search filter; '0' — to enable the Safe Search filter
     *
     * @return $this
     *
     * @param boolean $adult
     */
    public function setAdult($adult)
    {
        $this->vkarg_adult = $adult;

        return $this;
    }

    /**
     * Filters to apply:; 'youtube' — return YouTube videos only; 'vimeo' — return Vimeo videos only; 'short' — return short videos only; 'long' — return long videos only
     *
     * @return $this
     *
     * @param array $filters
     */
    public function setFilters(array $filters)
    {
        $this->vkarg_filters = $filters;

        return $this;
    }

    /**
     * If not null, only searches for high-definition videos.
     *
     * @return $this
     *
     * @param integer $hd
     */
    public function setHd($hd)
    {
        $this->vkarg_hd = $hd;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $longer
     */
    public function setLonger($longer)
    {
        $this->vkarg_longer = $longer;

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
     * Search query string (e.g., 'The Beatles').
     *
     * @return $this
     *
     * @param string $q
     */
    public function setQ($q)
    {
        $this->vkarg_q = $q;

        return $this;
    }

    /**
     * @return $this
     *
     * @param boolean $search_own
     */
    public function setSearchOwn($search_own)
    {
        $this->vkarg_search_own = $search_own;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $shorter
     */
    public function setShorter($shorter)
    {
        $this->vkarg_shorter = $shorter;

        return $this;
    }

    /**
     * Sort order:; '1' — by duration; '2' — by relevance; '0' — by date added
     *
     * @return $this
     *
     * @param integer $sort
     */
    public function setSort($sort)
    {
        $this->vkarg_sort = $sort;

        return $this;
    }
}
