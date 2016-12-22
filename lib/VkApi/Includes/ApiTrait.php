<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 28.11.16
 * Time: 21:00
 */

namespace VkApi\Includes;

/**
 * Class ApiTrait
 * @package VkApi\Includes
 */
trait ApiTrait
{
    public $token = '';

    public function __construct($token)
    {
        $this->token = $token;
    }
}
