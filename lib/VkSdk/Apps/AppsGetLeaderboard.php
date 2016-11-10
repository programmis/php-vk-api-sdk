<?php

namespace VkSdk\Apps;

use lib\AutoFillObject;
use VkSdk\Apps\Includes\Leaderboard;
use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserMin;

/**
 * Returns players rating in the game.
 * Class AppsGetLeaderboard
 * @package VkSdk\Apps
 */
class AppsGetLeaderboard extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var Leaderboard[]
     */
    private $items;

    /**
     * @var UserMin[]
     */
    private $profiles;

    /**
     * @return $this
     *
     * @param Leaderboard $item
     */
    public function addItem(Leaderboard $item)
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
     * @return Leaderboard[]
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
        return "apps.getLeaderboard";
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
                'class'  => 'VkSdk\Apps\Includes\Leaderboard',
                'method' => 'addItem'
            ],
            'profiles' => [
                'class'  => 'VkSdk\Users\Includes\UserMin',
                'method' => 'addProfile'
            ],
        ];
    }

    /**
     * Rating type.  Possible values:; *'1' — global rating among all players;; *'0' — rating among user friends.
     *
     * @return $this
     *
     * @param boolean $global
     */
    public function setGlobal($global)
    {
        $this->vkarg_global = $global;

        return $this;
    }

    /**
     * Leaderboard type. Possible values:; *'level' — by level;; *'points' — by mission points;; *'score' — by score ().
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
