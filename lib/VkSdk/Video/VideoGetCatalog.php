<?php

namespace VkSdk\Video;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserFull;
use VkSdk\Video\Includes\CatBlock;

/**
 * Returns video catalog
 * Class VideoGetCatalog
 * @package VkSdk\Video
 */
class VideoGetCatalog extends Request
{

    use AutoFillObject;

    /**
     * @var GroupFull[]
     */
    private $groups;

    /**
     * @var CatBlock[]
     */
    private $items;

    /**
     * @var string
     */
    private $next;

    /**
     * @var UserFull[]
     */
    private $profiles;

    /**
     * list of requested catalog sections
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
     * @param CatBlock $item
     */
    public function addItem(CatBlock $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return $this
     *
     * @param UserFull $profile
     */
    public function addProfile(UserFull $profile)
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
     * @return GroupFull[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return CatBlock[]
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
        return "video.getCatalog";
    }

    /**
     * New value for _from_ parameter
     *
     * @return string
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @return UserFull[]
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
                'class'  => 'VkSdk\Video\Includes\CatBlock',
                'method' => 'addItem'
            ],
            'profiles' => [
                'class'  => 'VkSdk\Users\Includes\UserFull',
                'method' => 'addProfile'
            ],
            'groups'   => [
                'class'  => 'VkSdk\Groups\Includes\GroupFull',
                'method' => 'addGroup'
            ],
        ];
    }

    /**
     * number of catalog blocks to return.
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
     * list of requested catalog sections
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
     * parameter for requesting the next results page. Value for transmitting here is returned in the 'next' field in a reply.
     *
     * @return $this
     *
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->vkarg_from = $from;

        return $this;
    }

    /**
     * number of videos in each block.
     *
     * @return $this
     *
     * @param integer $items_count
     */
    public function setItemsCount($items_count)
    {
        $this->vkarg_items_count = $items_count;

        return $this;
    }
}
