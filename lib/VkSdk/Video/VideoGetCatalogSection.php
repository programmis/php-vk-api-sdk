<?php
namespace VkSdk\Video;

use lib\AutoFillObject;
use VkSdk\Groups\Includes\GroupFull;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserFull;
use VkSdk\Video\Includes\CatElement;

/**
 * Returns a separate catalog section
 * Class VideoGetCatalogSection
 *
 * @package VkSdk\Video
 */
class VideoGetCatalogSection extends Request
{

    use AutoFillObject;

    /**
     * @var GroupFull[]
     */
    public $groups;

    /**
     * @var CatElement[]
     */
    public $items;

    /**
     * @var string
     */
    public $next;

    /**
     * @var UserFull[]
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
     * @param CatElement $item
     */
    public function addItem(CatElement $item)
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
        $this->setRequiredParams(["section_id", "from"]);

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
     * @return CatElement[]
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
        return "video.getCatalogSection";
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
                'class'  => 'VkSdk\Video\Includes\CatElement',
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
     * number of blocks to return.
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
     * 'next' value returned with a block by the '' method.
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
     * 'id' value returned with a block by the '' method.
     *
     * @return $this
     *
     * @param string $section_id
     */
    public function setSectionId($section_id)
    {
        $this->vkarg_section_id = $section_id;

        return $this;
    }
}
