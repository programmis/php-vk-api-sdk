<?php

namespace VkSdk\Newsfeed;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;
use VkSdk\Newsfeed\Includes\Item;
use VkSdk\Users\Includes\UserFull;

/**
 * ; Returns a list of newsfeeds recommended to the current user.
 * Class NewsfeedGetRecommended
 * @package VkSdk\Newsfeed
 */
class NewsfeedGetRecommended extends Request
{

    use AutoFillObject;

    /**
     * @var GroupFull[]
     */
    private $groups;

    /**
     * @var Item[]
     */
    private $items;

    /**
     * @var string
     */
    private $new_from;

    /**
     * @var string
     */
    private $new_offset;

    /**
     * @var UserFull[]
     */
    private $profiles;

    /**
     * Additional fields of  and  to return.
     *
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->vkarg_fields[] = $field;

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
     * @param Item $item
     */
    public function addItem(Item $item)
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
     * @return Item[]
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
        return "newsfeed.getRecommended";
    }

    /**
     * New from value
     *
     * @return string
     */
    public function getNewFrom()
    {
        return $this->new_from;
    }

    /**
     * New offset value
     *
     * @return string
     */
    public function getNewOffset()
    {
        return $this->new_offset;
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
                'class'  => 'VkSdk\Newsfeed\Includes\Item',
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
     * Number of news items to return.
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
     * Latest timestamp (in Unix time) of a news item to return. By default, the current time.
     *
     * @return $this
     *
     * @param integer $end_time
     */
    public function setEndTime($end_time)
    {
        $this->vkarg_end_time = $end_time;

        return $this;
    }

    /**
     * Additional fields of  and  to return.
     *
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->vkarg_fields = $fields;

        return $this;
    }

    /**
     * Maximum number of photos to return. By default, '5'.
     *
     * @return $this
     *
     * @param integer $max_photos
     */
    public function setMaxPhotos($max_photos)
    {
        $this->vkarg_max_photos = $max_photos;

        return $this;
    }

    /**
     * 'new_from' value obtained in previous call.
     *
     * @return $this
     *
     * @param string $start_from
     */
    public function setStartFrom($start_from)
    {
        $this->vkarg_start_from = $start_from;

        return $this;
    }

    /**
     * Earliest timestamp (in Unix time) of a news item to return. By default, 24 hours ago.
     *
     * @return $this
     *
     * @param integer $start_time
     */
    public function setStartTime($start_time)
    {
        $this->vkarg_start_time = $start_time;

        return $this;
    }
}
