<?php

namespace VkSdk\Likes;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserMin;

/**
 * Returns a list of IDs of users who added the specified object to their 'Likes' list.
 * Class LikesGetList
 * @package VkSdk\Likes
 */
class LikesGetList extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var UserMin[]
     */
    private $items;

    /**
     * @return $this
     *
     * @param UserMin $item
     */
    public function addItem(UserMin $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["type"]);

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
     * Number of user IDs to return (maximum '1000').; Default is '100' if 'friends_only' is set to  '0'; otherwise, the default is '10' if 'friends_only' is set to '1'.;
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
     * @return UserMin[]
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
        return "likes.getList";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Users\Includes\UserMin',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Specifies whether extended information will be returned.; '1' — to return extended information about users and communities from the 'Likes' list; '0' — to return no additional information (default)
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
     * Filters to apply:; 'likes' — returns information about all users who liked the object (default); 'copies' — returns information only about users who told their friends about the object
     *
     * @return $this
     *
     * @param string $filter
     */
    public function setFilter($filter)
    {
        $this->vkarg_filter = $filter;

        return $this;
    }

    /**
     * Specifies which users are returned:; '1' — to return only the current user's friends; '0' — to return all users (default)
     *
     * @return $this
     *
     * @param boolean $friends_only
     */
    public function setFriendsOnly($friends_only)
    {
        $this->vkarg_friends_only = $friends_only;

        return $this;
    }

    /**
     * Object ID. If 'type' is set as 'sitepage', 'item_id' can include the 'page_id' parameter value used during initialization of the .
     *
     * @return $this
     *
     * @param integer $item_id
     */
    public function setItemId($item_id)
    {
        $this->vkarg_item_id = $item_id;

        return $this;
    }

    /**
     * Offset needed to select a specific subset of users.
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
     * ID of the user, community, or application that owns the object. If the 'type' parameter is set as 'sitepage', the application ID is passed as 'owner_id'. Use negative value for a community id. If the 'type' parameter is not set, the 'owner_id' is assumed to be either the current user or the same application ID as if the 'type' parameter was set to 'sitepage'.; ;
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
     * URL of the page where the  is installed. Used instead of the 'item_id' parameter.
     *
     * @return $this
     *
     * @param string $page_url
     */
    public function setPageUrl($page_url)
    {
        $this->vkarg_page_url = $page_url;

        return $this;
    }

    /**
     * @return $this
     *
     * @param boolean $skip_own
     */
    public function setSkipOwn($skip_own)
    {
        $this->vkarg_skip_own = $skip_own;

        return $this;
    }

    /**
     * ; Object type:; 'post' — post on user or community wall; 'comment' — comment on a wall post; 'photo' — photo; 'audio' — audio; 'video' — video; 'note' — note; 'photo_comment' — comment on the photo; 'video_comment' — comment on the video; 'topic_comment' — comment in the discussion; 'sitepage' — page of the site where the  is installed
     *
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->vkarg_type = $type;

        return $this;
    }
}
