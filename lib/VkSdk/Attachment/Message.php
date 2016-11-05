<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 05.11.16
 * Time: 23:36
 */

namespace VkSdk\Attachment;

use lib\AutoFillObject;
use VkSdk\Objects\Audio;
use VkSdk\Objects\Photo;

/**
 * Информация о медиавложениях в личных сообщениях
 *
 * Class Message
 * @package VkSdk\Attachment
 */
class Message
{
    use AutoFillObject;

    const TYPE_PHOTO = 'photo';
    const TYPE_VIDEO = 'video';
    const TYPE_AUDIO = 'audio';
    const TYPE_DOC = 'doc';
    const TYPE_LINK = 'link';
    const TYPE_MARKET = 'market';
    const TYPE_MARKET_ALBUM = 'market_album';
    const TYPE_WALL = 'wall';
    const TYPE_WALL_REPLY = 'wall_reply';
    const TYPE_STICKER = 'sticker';
    const TYPE_GIFT = 'gift';

    /** @var string $type */
    private $type;

    /** @var Photo $photo */
    private $photo;
    /** @var Audio $audio */
    private $audio;

    public function objectFields()
    {
        return [
            'photo' => '\VkSdk\Objects\Photo',
            'audio' => '\VkSdk\Objects\Audio'
        ];
    }
}
