<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Likes
 *
 * @package VkApi\Methods
 */
class Likes
{
    use ApiTrait;

    /**
     * @return \VkSdk\Likes\LikesAdd
     */
    public function add()
    {
        return new \VkSdk\Likes\LikesAdd($this->token);
    }

    /**
     * @return \VkSdk\Likes\LikesDelete
     */
    public function delete()
    {
        return new \VkSdk\Likes\LikesDelete($this->token);
    }

    /**
     * @return \VkSdk\Likes\LikesGetList
     */
    public function getList()
    {
        return new \VkSdk\Likes\LikesGetList($this->token);
    }

    /**
     * @return \VkSdk\Likes\LikesIsLiked
     */
    public function isLiked()
    {
        return new \VkSdk\Likes\LikesIsLiked($this->token);
    }
}
