<?php

namespace VkSdk\Messages\Includes;

use lib\AutoFillObject;
use VkSdk\Users\Includes\UserGeo;

/**
 * Объект, описывающий личное сообщение
 *
 * @see     https://vk.com/dev/objects/message
 * Class MessageItem
 * @package VkSdk\Messages\Includes
 */
class MessageItem
{
    use AutoFillObject;

    /** @var int $id */
    private $id;
    /** @var int $user_id */
    private $user_id;
    /** @var int $from_id */
    private $from_id;
    /** @var int $date */
    private $date;
    /** @var bool $read_state */
    private $read_state;
    /** @var bool $out */
    private $out;
    /** @var string $title */
    private $title;
    /** @var string $body */
    private $body;
    /** @var UserGeo $geo */
    private $geo;
    /** @var array $attachments */
    private $attachments;

    /** @inheritdoc */
    public function objectFields()
    {
        return [
            'geo' => '\VkSdk\Users\Includes\UserGeo'
        ];
    }
}
