<?php
namespace VkSdk\Board;

use lib\AutoFillObject;
use VkSdk\Board\Includes\TopicComment;
use VkSdk\Board\Includes\TopicPoll;
use VkSdk\Groups\Includes\Group;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\User;

/**
 * Returns a list of comments on a topic on a community's discussion board.
 * Class BoardGetComments
 *
 * @package VkSdk\Board
 */
class BoardGetComments extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Group[]
     */
    public $groups;

    /**
     * @var TopicComment[]
     */
    public $items;

    /**
     * @var TopicPoll
     */
    public $poll;

    /**
     * @var User[]
     */
    public $profiles;

    /**
     * @return $this
     *
     * @param Group $group
     */
    public function addGroup(Group $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * @return $this
     *
     * @param TopicComment $item
     */
    public function addItem(TopicComment $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return $this
     *
     * @param User $profile
     */
    public function addProfile(User $profile)
    {
        $this->profiles[] = $profile;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id", "topic_id"]);

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
     * @return Group[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return TopicComment[]
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
        return "board.getComments";
    }

    /**
     * @return TopicPoll
     */
    public function getPoll()
    {
        return $this->poll;
    }

    /**
     * @return User[]
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
                'class'  => 'VkSdk\Board\Includes\TopicComment',
                'method' => 'addItem'
            ],
            'poll'     => 'VkSdk\Board\Includes\TopicPoll',
            'profiles' => [
                'class'  => 'VkSdk\Users\Includes\User',
                'method' => 'addProfile'
            ],
            'groups'   => [
                'class'  => 'VkSdk\Groups\Includes\Group',
                'method' => 'addGroup'
            ],
        ];
    }

    /**
     * '1' — to return information about users who posted comments; '0' — to return no additional fields (default)
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
     * ID of the community that owns the discussion board.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * '1' — to return the 'likes' field; '0'  — not to return the 'likes' field (default)
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
     * Offset needed to return a specific subset of comments.
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
     * Sort order:; 'asc' — by creation date in chronological order; 'desc' — by creation date in reverse chronological order;
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

    /**
     * Topic ID.
     *
     * @return $this
     *
     * @param integer $topic_id
     */
    public function setTopicId($topic_id)
    {
        $this->vkarg_topic_id = $topic_id;

        return $this;
    }
}
