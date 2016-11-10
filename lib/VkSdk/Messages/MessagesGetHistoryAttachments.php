<?php

namespace VkSdk\Messages;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\AttachmentsHistory;

/**
 * Returns media files from the dialog or group chat.
 * Class MessagesGetHistoryAttachments
 * @package VkSdk\Messages
 */
class MessagesGetHistoryAttachments extends Request
{

    use AutoFillObject;
    const MEDIA_TYPE_AUDIO = 'audio';
    const MEDIA_TYPE_DOC = 'doc';
    const MEDIA_TYPE_LINK = 'link';
    const MEDIA_TYPE_MARKET = 'market';
    const MEDIA_TYPE_PHOTO = 'photo';
    const MEDIA_TYPE_SHARE = 'share';
    const MEDIA_TYPE_VIDEO = 'video';
    const MEDIA_TYPE_WALL = 'wall';

    /**
     * @var AttachmentsHistory[]
     */
    private $items;

    /**
     * @var string
     */
    private $next_from;

    /**
     * Additional  to return.
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
     * @param AttachmentsHistory $item
     */
    public function addItem(AttachmentsHistory $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["peer_id"]);

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
     * @return AttachmentsHistory[]
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
        return "messages.getHistoryAttachments";
    }

    /**
     * Value for pagination
     *
     * @return string
     */
    public function getNextFrom()
    {
        return $this->next_from;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Messages\Includes\AttachmentsHistory',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Number of objects to return.
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
     * Additional  to return.
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
     * Type of media files to return:; *'photo';; *'video';; *'audio';; *'doc';; *'link'.;
     * see self::MEDIA_TYPE_* constants
     *
     * @return $this
     *
     * @param string $media_type
     */
    public function setMediaType($media_type)
    {
        $this->vkarg_media_type = $media_type;

        return $this;
    }

    /**
     * Peer ID.; ; "; For group chat:; '2000000000 + chat ID' ; ; For community:; '-community ID'"
     *
     * @return $this
     *
     * @param integer $peer_id
     */
    public function setPeerId($peer_id)
    {
        $this->vkarg_peer_id = $peer_id;

        return $this;
    }

    /**
     * '1' — to return photo sizes in a
     *
     * @return $this
     *
     * @param boolean $photo_sizes
     */
    public function setPhotoSizes($photo_sizes)
    {
        $this->vkarg_photo_sizes = $photo_sizes;

        return $this;
    }

    /**
     * Message ID to start return results from.
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
}
