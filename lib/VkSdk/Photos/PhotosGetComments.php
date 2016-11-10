<?php

namespace VkSdk\Photos;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserFull;
use VkSdk\Wall\Includes\Comment;

/**
 * Returns a list of comments on a photo.
 * Class PhotosGetComments
 * @package VkSdk\Photos
 */
class PhotosGetComments extends Request
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
     * @var Comment[]
     */
    private $items;

    /**
     * @var UserFull[]
     */
    private $profiles;

    /**
     * @var integer
     */
    private $real_offset;

    /**
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
     * @param Comment $item
     */
    public function addItem(Comment $item)
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
        $this->setRequiredParams(["photo_id"]);

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
     * Number of comments to return.
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
     * @return Comment[]
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
        return "photos.getComments";
    }

    /**
     * @return UserFull[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Real offset of the comments
     *
     * @return integer
     */
    public function getRealOffset()
    {
        return $this->real_offset;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items'    => [
                'class'  => 'VkSdk\Wall\Includes\Comment',
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
     * @return $this
     *
     * @param string $access_key
     */
    public function setAccessKey($access_key)
    {
        $this->vkarg_access_key = $access_key;

        return $this;
    }

    /**
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
     * '1' — to return an additional 'likes' field; '0' — (default)
     *
     * @return $this
     *
     * @param boolean $need_likes
     */
    public function setNeedLikes($need_likes)
    {
        $this->vkarg_need_likes = $need_likes;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of comments. By default, '0'.
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
     * ID of the user or community that owns the photo.
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
     * Photo ID.
     *
     * @return $this
     *
     * @param integer $photo_id
     */
    public function setPhotoId($photo_id)
    {
        $this->vkarg_photo_id = $photo_id;

        return $this;
    }

    /**
     * Sort order:; 'asc' — old first; 'desc' — new first
     *
     * @return $this
     *
     * @param string $sort
     */
    public function setSort($sort)
    {
        $this->vkarg_sort = $sort;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $start_comment_id
     */
    public function setStartCommentId($start_comment_id)
    {
        $this->vkarg_start_comment_id = $start_comment_id;

        return $this;
    }
}
